<?php

namespace App\Http\Controllers\Api;

use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\SystemResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\SystemCollection;
use App\Http\Requests\SystemStoreRequest;
use App\Http\Requests\SystemUpdateRequest;

class SystemController extends Controller
{
    public function index(Request $request): SystemCollection
    {
        $this->authorize('view-any', System::class);

        $search = $request->get('search', '');

        $systems = System::search($search)
            ->latest()
            ->paginate();

        return new SystemCollection($systems);
    }

    public function store(SystemStoreRequest $request): SystemResource
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

        return new SystemResource($system);
    }

    public function show(Request $request, System $system): SystemResource
    {
        $this->authorize('view', $system);

        return new SystemResource($system);
    }

    public function update(
        SystemUpdateRequest $request,
        System $system
    ): SystemResource {
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

        return new SystemResource($system);
    }

    public function destroy(Request $request, System $system): Response
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

        return response()->noContent();
    }
}
