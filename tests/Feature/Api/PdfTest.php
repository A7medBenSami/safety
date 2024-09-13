<?php

namespace Tests\Feature\Api;

use App\Models\Pdf;
use App\Models\User;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PdfTest extends TestCase
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
    public function it_gets_pdfs_list(): void
    {
        $pdfs = Pdf::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.pdfs.index'));

        $response->assertOk()->assertSee($pdfs[0]->file);
    }

    /**
     * @test
     */
    public function it_stores_the_pdf(): void
    {
        $data = Pdf::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.pdfs.store'), $data);

        $this->assertDatabaseHas('pdfs', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_pdf(): void
    {
        $pdf = Pdf::factory()->create();

        $data = [];

        $response = $this->putJson(route('api.pdfs.update', $pdf), $data);

        $data['id'] = $pdf->id;

        $this->assertDatabaseHas('pdfs', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_pdf(): void
    {
        $pdf = Pdf::factory()->create();

        $response = $this->deleteJson(route('api.pdfs.destroy', $pdf));

        $this->assertModelMissing($pdf);

        $response->assertNoContent();
    }
}
