<?php

namespace Tests\Feature\Models;

use App\Models\Site;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
    public function test_example()
    {
        Passport::actingAs(
            User::factory()->create(),
            ['sites-store']
        );

        $site = Site::factory()->make()->toArray();

        $response = $this->postJson('/sites', $site);

        $response->assertStatus(201);

        $this->assertDatabaseHas('sites', [
            'name' => $site['name'],
            'slug' => $site['slug'],
        ]);
    }
}
