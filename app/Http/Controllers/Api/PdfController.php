<?php

namespace App\Http\Controllers\Api;

use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\PdfResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\PdfCollection;
use App\Http\Requests\PdfStoreRequest;
use App\Http\Requests\PdfUpdateRequest;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function index(Request $request): PdfCollection
    {
        $this->authorize('view-any', Pdf::class);

        $search = $request->get('search', '');

        $pdfs = Pdf::search($search)
            ->latest()
            ->paginate();

        return new PdfCollection($pdfs);
    }

    public function store(PdfStoreRequest $request): PdfResource
    {
        $this->authorize('create', Pdf::class);

        $validated = $request->validated();
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $pdf = Pdf::create($validated);

        return new PdfResource($pdf);
    }

    public function show(Request $request, Pdf $pdf): PdfResource
    {
        $this->authorize('view', $pdf);

        return new PdfResource($pdf);
    }

    public function update(PdfUpdateRequest $request, Pdf $pdf): PdfResource
    {
        $this->authorize('update', $pdf);

        $validated = $request->validated();

        if ($request->hasFile('file')) {
            if ($pdf->file) {
                Storage::delete($pdf->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $pdf->update($validated);

        return new PdfResource($pdf);
    }

    public function destroy(Request $request, Pdf $pdf): Response
    {
        $this->authorize('delete', $pdf);

        if ($pdf->file) {
            Storage::delete($pdf->file);
        }

        $pdf->delete();

        return response()->noContent();
    }
}
