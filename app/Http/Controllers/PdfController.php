<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PdfStoreRequest;
use App\Http\Requests\PdfUpdateRequest;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Pdf::class);

        $search = $request->get('search', '');

        $pdfs = Pdf::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.pdfs.index', compact('pdfs', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Pdf::class);

        return view('app.pdfs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PdfStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Pdf::class);

        $validated = $request->validated();
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $pdf = Pdf::create($validated);

        return redirect()
            ->route('pdfs.edit', $pdf)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Pdf $pdf): View
    {
        $this->authorize('view', $pdf);

        return view('app.pdfs.show', compact('pdf'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Pdf $pdf): View
    {
        $this->authorize('update', $pdf);

        return view('app.pdfs.edit', compact('pdf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        PdfUpdateRequest $request,
        Pdf $pdf
    ): RedirectResponse {
        $this->authorize('update', $pdf);

        $validated = $request->validated();
        if ($request->hasFile('file')) {
            if ($pdf->file) {
                Storage::delete($pdf->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $pdf->update($validated);

        return redirect()
            ->route('pdfs.edit', $pdf)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Pdf $pdf): RedirectResponse
    {
        $this->authorize('delete', $pdf);

        if ($pdf->file) {
            Storage::delete($pdf->file);
        }

        $pdf->delete();

        return redirect()
            ->route('pdfs.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
