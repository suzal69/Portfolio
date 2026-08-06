<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit Project: {{ $project->title }}</h1>
    <a href="{{ route('projects.index') }}">← Back to List</a>
    <hr>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Title:</label><br>
            <input type="text" name="title" value="{{ old('title', $project->title) }}">
        </div>
        <br>
        <div>
            <label>Description:</label><br>
            <textarea name="description">{{ old('description', $project->description) }}</textarea>
        </div>
        <br>
        <div>
            <label>Status:</label><br>
            <select name="status">
                <option value="pending" {{ $project->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ $project->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>
        <br>
        <button type="submit">Update Project</button>
    </form>
</body>
</html>