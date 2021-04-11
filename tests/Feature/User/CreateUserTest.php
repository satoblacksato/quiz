<?php

namespace Tests\Feature\User;

use App\Models\Locations\City;
use App\Models\User;
use Carbon\Carbon;
use Database\Seeders\LocationsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @test
     * Can See form create
     */
    public function can_see_create_user_form()
    {
        $this->withoutExceptionHandling();
        //Arrange
        $url = route('users.create');
        
        //Act
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        $response = $this->get($url);
        
        //Assert
        $response->assertOk();
        
        $response->assertViewIs('users.create');
    }
    
    /**
     * @test
     */
    public function can_create_a_user()
    {
        //Arrange
        $url = route('users.store');
        $this->seed(LocationsSeeder::class);
        $city = City::inRandomOrder()
            ->limit(1)
            ->first();
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        //Act
        $response = $this->post($url, [
            'name' => 'Ernesto',
            'email' => 'ernesto.liberio2@gmail.com',
            'nui'=> '12063219920',
            'password' => 'Passw0rd*',
            'password_confirmation' => 'Passw0rd*',
            'birthdate'=>'1989-03-10',
            'city_id'=>$city->id
        ]);
        
        //Assert
        $this->assertEquals(1, User::where('is_admin',0)->count());
        $user = User::where('is_admin',false)->first();
        $this->assertEquals('Ernesto', $user->name);
        $this->assertEquals($city->id, $user->city_id);
        $this->assertEquals('12063219920', $user->nui);
        $this->assertEquals('ernesto.liberio2@gmail.com', $user->email);
        
        $response->assertRedirect(route('users.index'));
    }
    
    /**
     * @test
     * Validate field required in forms
     */
    public function field_are_required()
    {
        //$this->expectException(ValidationException::class);
        $this->seed(LocationsSeeder::class);
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        
        $url = route('users.store');
        
        $this->post($url, [
            'name' => null,
            'email' => null,
            'nui'=> null,
            'phone'=>null,
            'password' => null,
            'password_confirmation' => null,
            'birthdate'=>null,
            'city_id'=>null
        ])->assertStatus(302)
            ->assertSessionHasErrors([
            'name',
            'email',
            'nui',
            'password',
            'birthdate',
            'city_id'
        ]);
    }
    
    /**
     * @test
     * Validate field age before 18 years
     */
    public function field_are_rules_form_age_min_18_years()
    {
        $this->seed(LocationsSeeder::class);
        $city = City::inRandomOrder()
            ->limit(1)
            ->first();
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        
        $url = route('users.store');
        
        $this->post($url, [
            'name' => 'Ernesto',
            'email' => 'ernesto.liberio@gmail.com',
            'nui'=> '12063219920',
            'password' => 'Passw0rd*',
            'password_confirmation' => 'Passw0rd*',
            'birthdate'=>'2004-03-10',
            'city_id'=>$city->id
        ])->assertStatus(302)
            ->assertSessionHasErrors([
            'birthdate'
        ]);
    }
    
    /**
     * @test
     * Validate field nui by user
     */
    public function field_are_rules_form_nui()
    {
        $this->seed(LocationsSeeder::class);
        $city = City::inRandomOrder()
            ->limit(1)
            ->first();
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        
        $url = route('users.store');
        
        $this->post($url, [
            'name' => 'Ernesto',
            'email' => 'ernesto.liberio@gmail.com',
            'nui'=> '1206321992',
            'password' => 'Passw0rd*',
            'password_confirmation' => 'Passw0rd*',
            'birthdate'=>'1989-03-10',
            'city_id'=>$city->id
        ])->assertStatus(302)
            ->assertSessionHasErrors([
                'nui'
            ]);
    }
    
    /**
     * @test
     * Validate field password rule
     */
    public function field_are_rules_form_password()
    {
        $this->seed(LocationsSeeder::class);
        $city = City::inRandomOrder()
            ->limit(1)
            ->first();
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        
        $url = route('users.store');
        
        $this->post($url, [
            'name' => 'Ernesto',
            'email' => 'ernesto.liberio@gmail.com',
            'nui'=> '1206321992',
            'password' => 'passw0rd*',
            'password_confirmation' => 'passw0rd*',
            'birthdate'=>'1989-03-10',
            'city_id'=>$city->id
        ])->assertStatus(302)
            ->assertSessionHasErrors([
                'password'
            ]);
    }
}
