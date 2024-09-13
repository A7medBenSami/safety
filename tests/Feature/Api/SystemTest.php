<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\System;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SystemTest extends TestCase
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
    public function it_gets_systems_list(): void
    {
        $systems = System::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.systems.index'));

        $response->assertOk()->assertSee($systems[0]->image1);
    }

    /**
     * @test
     */
    public function it_stores_the_system(): void
    {
        $data = System::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.systems.store'), $data);

        $this->assertDatabaseHas('systems', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_system(): void
    {
        $system = System::factory()->create();

        $data = [
            'image2' => $this->faker->text(255),
            'image3' => $this->faker->text(255),
            'image4' => $this->faker->text(255),
        ];

        $response = $this->putJson(route('api.systems.update', $system), $data);

        $data['id'] = $system->id;

        $this->assertDatabaseHas('systems', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_system(): void
    {
        $system = System::factory()->create();

        $response = $this->deleteJson(route('api.systems.destroy', $system));

        $this->assertModelMissing($system);

        $response->assertNoContent();
    }
}
