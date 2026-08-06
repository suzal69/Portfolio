<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // 1. READ ALL: Display list of projects
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    // 2. CREATE FORM: Display create form
    public function create()
    {
        return view('projects.create');
    }

    // 3. STORE: Validate and insert project into DB
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'status'      => 'required|in:pending,in_progress,completed',
        ]);

        Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    // 4. READ SINGLE: Display single project details
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // 5. EDIT FORM: Display edit form with existing data
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // 6. UPDATE: Validate and update project in DB
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'status'      => 'required|in:pending,in_progress,completed',
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    // 7. DELETE: Remove project from DB
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}