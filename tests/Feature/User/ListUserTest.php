<?php

namespace Tests\Feature\User;

use App\Models\User;
use Database\Seeders\LocationsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListUserTest extends TestCase
{
    /**
     * @test
     * Test can see user list from database
     */
    public function can_see_user_list()
    {
        $this->withoutExceptionHandling();
        $this->seed(LocationsSeeder::class);
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
        $this->actingAs($user);
        
        // Arrange
        \App\Models\User::factory(10)->create();
    
        $url = '/users';
    
        // Act
        $response = $this->get($url);
    
        // Assert
        $response->assertOk();
    
        $response->assertViewIs('users.index');
    
        $response->assertViewHas('users');
    
    }
}
