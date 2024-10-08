<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Service;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_services_list(): void
    {
        $services = Service::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.services.index'));

        $response->assertOk()->assertSee($services[0]->image1);
    }

    /**
     * @test
     */
    public function it_stores_the_service(): void
    {
        $data = Service::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.services.store'), $data);

        $this->assertDatabaseHas('services', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_service(): void
    {
        $service = Service::factory()->create();

        $data = [
            'image2' => $this->faker->text(255),
            'image3' => $this->faker->text(255),
            'image4' => $this->faker->text(255),
        ];

        $response = $this->putJson(
            route('api.services.update', $service),
            $data
        );

        $data['id'] = $service->id;

        $this->assertDatabaseHas('services', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_service(): void
    {
        $service = Service::factory()->create();

        $response = $this->deleteJson(route('api.services.destroy', $service));

        $this->assertModelMissing($service);

        $response->assertNoContent();
    }
}
