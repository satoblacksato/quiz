<?php

namespace Tests\Feature\Site;

use App\Models\Locations\City;
use App\Models\Locations\Country;
use App\Models\Locations\State;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LocationsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     * The test can create data locations
     */
    public function can_create_data_locations()
    {
        $this->withoutExceptionHandling();
        $this->seed(\Database\Seeders\LocationsSeeder::class);
        $this->assertCount(1,Country::get());
        $this->assertCount(25, State::get());
        $this->assertCount(224, City::get());
    }
}
