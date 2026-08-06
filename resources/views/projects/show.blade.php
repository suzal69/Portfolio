<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $project->title }}</title>
</head>
<body>
    <h1>{{ $project->title }}</h1>
    <a href="{{ route('projects.index') }}">← Back to List</a>
    <hr>

    <p><strong>Description:</strong></p>
    <p>{{ $project->description }}</p>

    <p><strong>Status:</strong> {{ ucfirst($project->status) }}</p>
    <p><strong>Created At:</strong> {{ $project->created_at->format('Y-m-d H:i') }}</p>

    <br>
    <a href="{{ route('projects.edit', $project->id) }}">Edit Project</a>
</body>
</html>