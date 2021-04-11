<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OptionByAdminTest extends TestCase
{
    private $user;
    /**
     * @test
     * The test can view page with form login
     */
    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');
        
        $response->assertStatus(200);
    }
    
    /**
     * @test
     * The test can login user with role Admin
     */
    public function can_login_user_admin()
    {
        $this->withoutExceptionHandling();
        $this->processCreateUser();
        $response = $this->post('/login', $this->getCredentials());
        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
    
    
    /**
     * @test
     * The test can view option users
     */
    public function can_view_option_users()
    {
        $this->withoutExceptionHandling();
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        $response = $this->get(RouteServiceProvider::HOME);
        $response->assertSee(__('labels.users'));
    }
    
    /**
     * @test
     * The test can view option emails
     */
    public function can_view_option_emails()
    {
        $this->withoutExceptionHandling();
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        $response = $this->get(RouteServiceProvider::HOME);
        $response->assertSee(__('labels.emails'));
    }
    
    /**
     * @test
     * The test can view button create
     */
    public function can_view_button_create()
    {
        $this->withoutExceptionHandling();
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        $response = $this->get(route('users.index'));
        $response->assertSee(__('labels.create_user'));
    }
    /**
     * @process for create user
     */
    private function processCreateUser(){
        $this->user=  User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator','email'=>'ernesto.liberio@gmail.com',
             'password'=>bcrypt('P@ssw0rd')]
        )->first();
    }
    
    /**
     * @return array
     */
    private function getCredentials(){
        return [
            'email' => 'ernesto.liberio@gmail.com',
            'password' => 'P@ssw0rd',
        ];
    }
}
