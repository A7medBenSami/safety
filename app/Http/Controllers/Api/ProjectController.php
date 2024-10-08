<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ProjectCollection;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;

class ProjectController extends Controller
{
    public function index(Request $request): ProjectCollection
    {
        $this->authorize('view-any', Project::class);

        $search = $request->get('search', '');

        $projects = Project::search($search)
            ->latest()
            ->paginate();

        return new ProjectCollection($projects);
    }

    public function store(ProjectStoreRequest $request): ProjectResource
    {
        $this->authorize('create', Project::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $project = Project::create($validated);

        return new ProjectResource($project);
    }

    public function show(Request $request, Project $project): ProjectResource
    {
        $this->authorize('view', $project);

        return new ProjectResource($project);
    }

    public function update(
        ProjectUpdateRequest $request,
        Project $project
    ): ProjectResource {
        $this->authorize('update', $project);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::delete($project->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        $project->update($validated);

        return new ProjectResource($project);
    }

    public function destroy(Request $request, Project $project): Response
    {
        $this->authorize('delete', $project);

        if ($project->image) {
            Storage::delete($project->image);
        }

        $project->delete();

        return response()->noContent();
    }
}
