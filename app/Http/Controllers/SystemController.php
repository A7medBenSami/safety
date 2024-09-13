<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SystemStoreRequest;
use App\Http\Requests\SystemUpdateRequest;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', System::class);

        $search = $request->get('search', '');

        $systems = System::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.systems.index', compact('systems', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', System::class);

        return view('app.systems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SystemStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', System::class);

        $validated = $request->validated();
        if ($request->hasFile('image1')) {
            $validated['image1'] = $request->file('image1')->store('public');
        }

        if ($request->hasFile('image2')) {
            $validated['image2'] = $request->file('image2')->store('public');
        }

        if ($request->hasFile('image3')) {
            $validated['image3'] = $request->file('image3')->store('public');
        }

        if ($request->hasFile('image4')) {
            $validated['image4'] = $request->file('image4')->store('public');
        }

        $system = System::create($validated);

        return redirect()
            ->route('systems.edit', $system)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, System $system): View
    {
        $this->authorize('view', $system);

        return view('app.systems.show', compact('system'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, System $system): View
    {
        $this->authorize('update', $system);

        return view('app.systems.edit', compact('system'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        SystemUpdateRequest $request,
        System $system
    ): RedirectResponse {
        $this->authorize('update', $system);

        $validated = $request->validated();
        if ($request->hasFile('image1')) {
            if ($system->image1) {
                Storage::delete($system->image1);
            }

            $validated['image1'] = $request->file('image1')->store('public');
        }

        if ($request->hasFile('image2')) {
            if ($system->image2) {
                Storage::delete($system->image2);
            }

            $validated['image2'] = $request->file('image2')->store('public');
        }

        if ($request->hasFile('image3')) {
            if ($system->image3) {
                Storage::delete($system->image3);
            }

            $validated['image3'] = $request->file('image3')->store('public');
        }

        if ($request->hasFile('image4')) {
            if ($system->image4) {
                Storage::delete($system->image4);
            }

            $validated['image4'] = $request->file('image4')->store('public');
        }

        $system->update($validated);

        return redirect()
            ->route('systems.edit', $system)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, System $system): RedirectResponse
    {
        $this->authorize('delete', $system);

        if ($system->image1) {
            Storage::delete($system->image1);
        }

        if ($system->image2) {
            Storage::delete($system->image2);
        }

        if ($system->image3) {
            Storage::delete($system->image3);
        }

        if ($system->image4) {
            Storage::delete($system->image4);
        }

        $system->delete();

        return redirect()
            ->route('systems.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
