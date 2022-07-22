<?php

namespace Tests\Feature\Models;

use App\Models\Site;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use Tests\TestCase;

class SiteTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_create_a_site()
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

    public function test_user_cannot_create_a_site_with_same_uuid()
    {
        Passport::actingAs(
            User::factory()->create(),
            ['sites-store']
        );

        $site = Site::factory()->make()->toArray();

        $this->postJson('/sites', $site);

        // change the slug, keep uuid

        $site['slug'] = $this->faker()->sentence(2);

        $response = $this->postJson('/sites', $site);

        $response->assertStatus(422);
    }

    public function test_user_cannot_create_a_site_with_same_slug()
    {
        Passport::actingAs(
            User::factory()->create(),
            ['sites-store']
        );

        $site = Site::factory()->make()->toArray();

        $this->postJson('/sites', $site);

        // change the slug, keep uuid

        $site['uuid'] = $this->faker()->uuid();

        $response = $this->postJson('/sites', $site);

        $response->assertStatus(422);
    }
}
