<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
            $projects = Project::all();
            return view('admin.home', compact('projects'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'bail|required|string|max:255',
            'description' => 'bail|required|string',
            'date' => 'bail|required|date',
            'thumb' => 'bail|required|url:http,https|max:500',
        ], [
            'title.max' => 'The title must be shorter than 255 characters.',
            'thumb.url' => "The screenshot URL must start with 'http' or 'https'.",
            'thumb.max' => "The screenshot URL must be shorter than 500 characters."
        ]);
        $data = $request->all();

        $new_project = new Project();
        $new_project->fill($data);
        $new_project->save();

        return to_route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        return view('admin.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->update($data);
        return to_route('admin.projects.index', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return to_route('admin.projects.index');
    }
}
