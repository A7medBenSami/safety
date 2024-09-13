<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ServiceCollection;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;

class ServiceController extends Controller
{
    public function index(Request $request): ServiceCollection
    {
        $this->authorize('view-any', Service::class);

        $search = $request->get('search', '');

        $services = Service::search($search)
            ->latest()
            ->paginate();

        return new ServiceCollection($services);
    }

    public function store(ServiceStoreRequest $request): ServiceResource
    {
        $this->authorize('create', Service::class);

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

        $service = Service::create($validated);

        return new ServiceResource($service);
    }

    public function show(Request $request, Service $service): ServiceResource
    {
        $this->authorize('view', $service);

        return new ServiceResource($service);
    }

    public function update(
        ServiceUpdateRequest $request,
        Service $service
    ): ServiceResource {
        $this->authorize('update', $service);

        $validated = $request->validated();

        if ($request->hasFile('image1')) {
            if ($service->image1) {
                Storage::delete($service->image1);
            }

            $validated['image1'] = $request->file('image1')->store('public');
        }

        if ($request->hasFile('image2')) {
            if ($service->image2) {
                Storage::delete($service->image2);
            }

            $validated['image2'] = $request->file('image2')->store('public');
        }

        if ($request->hasFile('image3')) {
            if ($service->image3) {
                Storage::delete($service->image3);
            }

            $validated['image3'] = $request->file('image3')->store('public');
        }

        if ($request->hasFile('image4')) {
            if ($service->image4) {
                Storage::delete($service->image4);
            }

            $validated['image4'] = $request->file('image4')->store('public');
        }

        $service->update($validated);

        return new ServiceResource($service);
    }

    public function destroy(Request $request, Service $service): Response
    {
        $this->authorize('delete', $service);

        if ($service->image1) {
            Storage::delete($service->image1);
        }

        if ($service->image2) {
            Storage::delete($service->image2);
        }

        if ($service->image3) {
            Storage::delete($service->image3);
        }

        if ($service->image4) {
            Storage::delete($service->image4);
        }

        $service->delete();

        return response()->noContent();
    }
}
