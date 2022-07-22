<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use Tests\TestCase;

class SiteTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_new_site()
    {
        Passport::actingAs(
            User::factory()->create(),
            ['create-sites']
        );

        $site = Site::factory()->make();

        $response = $this->post('/sites');

        $response->assertStatus(201);

        $this->assertDatabaseHas('sites', [
            'name' => $site->name,
            'slug' => $site->slug,
        ]);
    }
}
