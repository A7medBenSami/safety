<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Service;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_services(): void
    {
        $services = Service::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('services.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.services.index')
            ->assertViewHas('services');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_service(): void
    {
        $response = $this->get(route('services.create'));

        $response->assertOk()->assertViewIs('app.services.create');
    }

    /**
     * @test
     */
    public function it_stores_the_service(): void
    {
        $data = Service::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('services.store'), $data);

        $this->assertDatabaseHas('services', $data);

        $service = Service::latest('id')->first();

        $response->assertRedirect(route('services.edit', $service));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_service(): void
    {
        $service = Service::factory()->create();

        $response = $this->get(route('services.show', $service));

        $response
            ->assertOk()
            ->assertViewIs('app.services.show')
            ->assertViewHas('service');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_service(): void
    {
        $service = Service::factory()->create();

        $response = $this->get(route('services.edit', $service));

        $response
            ->assertOk()
            ->assertViewIs('app.services.edit')
            ->assertViewHas('service');
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

        $response = $this->put(route('services.update', $service), $data);

        $data['id'] = $service->id;

        $this->assertDatabaseHas('services', $data);

        $response->assertRedirect(route('services.edit', $service));
    }

    /**
     * @test
     */
    public function it_deletes_the_service(): void
    {
        $service = Service::factory()->create();

        $response = $this->delete(route('services.destroy', $service));

        $response->assertRedirect(route('services.index'));

        $this->assertModelMissing($service);
    }
}
