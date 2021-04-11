<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateAdminTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     * The test can create an administrator role user to manage user crud
     */
    public function can_create_admin_user()
    {
        $this->withoutExceptionHandling();
        $user= User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator']
        )->first();
      
        $this->assertEquals(true, $user->is_admin);
        $this->assertEquals('Administrator',  $user->name);
    }
    /**
     * @test
     * The test can create an administrator role user to manage user crud
     */
    public function can_create_admin_user_by_seeder()
    {
        $this->withoutExceptionHandling();
        $this->seed(\Database\Seeders\AdminSeeder::class);
        $this->assertCount(1,User::get());
        $this->assertCount(1, User::where('name','=','Administrator')->get());
    }
}
