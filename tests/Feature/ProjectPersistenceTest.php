<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectPersistenceTest extends TestCase
{
    use RefreshDatabase;

    public function test_project_can_be_created_and_read_back(): void
    {
        $project = Project::create([
            'title' => 'Render DB Test',
            'description' => 'Persisted through the model',
            'status' => 'pending',
        ]);

        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
            'title' => 'Render DB Test',
        ]);

        $this->assertSame('Render DB Test', Project::find($project->id)->title);
    }
}
