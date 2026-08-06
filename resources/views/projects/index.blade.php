<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Projects</title>
</head>
<body>
    <h1>Project Management</h1>

    <a href="{{ route('projects.create') }}">+ Create New Project</a>
    <hr>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @forelse($projects as $project)
        <div>
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
            <p><strong>Status:</strong> {{ ucfirst($project->status) }}</p>
            
            <a href="{{ route('projects.show', $project->id) }}">View Details</a> | 
            <a href="{{ route('projects.edit', $project->id) }}">Edit</a> | 

            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
            </form>
        </div>
        <hr>
    @empty
        <p>No projects found in the database.</p>
    @endforelse
</body>
</html>