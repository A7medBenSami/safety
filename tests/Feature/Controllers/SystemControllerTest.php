<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\System;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SystemControllerTest extends TestCase
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
    public function it_displays_index_view_with_systems(): void
    {
        $systems = System::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('systems.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.systems.index')
            ->assertViewHas('systems');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_system(): void
    {
        $response = $this->get(route('systems.create'));

        $response->assertOk()->assertViewIs('app.systems.create');
    }

    /**
     * @test
     */
    public function it_stores_the_system(): void
    {
        $data = System::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('systems.store'), $data);

        $this->assertDatabaseHas('systems', $data);

        $system = System::latest('id')->first();

        $response->assertRedirect(route('systems.edit', $system));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_system(): void
    {
        $system = System::factory()->create();

        $response = $this->get(route('systems.show', $system));

        $response
            ->assertOk()
            ->assertViewIs('app.systems.show')
            ->assertViewHas('system');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_system(): void
    {
        $system = System::factory()->create();

        $response = $this->get(route('systems.edit', $system));

        $response
            ->assertOk()
            ->assertViewIs('app.systems.edit')
            ->assertViewHas('system');
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

        $response = $this->put(route('systems.update', $system), $data);

        $data['id'] = $system->id;

        $this->assertDatabaseHas('systems', $data);

        $response->assertRedirect(route('systems.edit', $system));
    }

    /**
     * @test
     */
    public function it_deletes_the_system(): void
    {
        $system = System::factory()->create();

        $response = $this->delete(route('systems.destroy', $system));

        $response->assertRedirect(route('systems.index'));

        $this->assertModelMissing($system);
    }
}
