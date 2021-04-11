<?php

namespace Database\Seeders;

use App\Models\Locations\City;
use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(1)->create(
            ['is_admin'=>true,'name'=>'Administrator','email'=>'ernesto.liberio@gmail.com','city_id'=>optional(City::first())->id,
             'password'=>bcrypt('P@ssw0rd*')]
        );
    }
}
