<?php

namespace Tests\Feature\Controllers;

use App\Models\Pdf;
use App\Models\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PdfControllerTest extends TestCase
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
    public function it_displays_index_view_with_pdfs(): void
    {
        $pdfs = Pdf::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('pdfs.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.pdfs.index')
            ->assertViewHas('pdfs');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_pdf(): void
    {
        $response = $this->get(route('pdfs.create'));

        $response->assertOk()->assertViewIs('app.pdfs.create');
    }

    /**
     * @test
     */
    public function it_stores_the_pdf(): void
    {
        $data = Pdf::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('pdfs.store'), $data);

        $this->assertDatabaseHas('pdfs', $data);

        $pdf = Pdf::latest('id')->first();

        $response->assertRedirect(route('pdfs.edit', $pdf));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_pdf(): void
    {
        $pdf = Pdf::factory()->create();

        $response = $this->get(route('pdfs.show', $pdf));

        $response
            ->assertOk()
            ->assertViewIs('app.pdfs.show')
            ->assertViewHas('pdf');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_pdf(): void
    {
        $pdf = Pdf::factory()->create();

        $response = $this->get(route('pdfs.edit', $pdf));

        $response
            ->assertOk()
            ->assertViewIs('app.pdfs.edit')
            ->assertViewHas('pdf');
    }

    /**
     * @test
     */
    public function it_updates_the_pdf(): void
    {
        $pdf = Pdf::factory()->create();

        $data = [];

        $response = $this->put(route('pdfs.update', $pdf), $data);

        $data['id'] = $pdf->id;

        $this->assertDatabaseHas('pdfs', $data);

        $response->assertRedirect(route('pdfs.edit', $pdf));
    }

    /**
     * @test
     */
    public function it_deletes_the_pdf(): void
    {
        $pdf = Pdf::factory()->create();

        $response = $this->delete(route('pdfs.destroy', $pdf));

        $response->assertRedirect(route('pdfs.index'));

        $this->assertModelMissing($pdf);
    }
}
