<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Project</title>
</head>
<body>
    <h1>Create New Project</h1>
    <a href="{{ route('projects.index') }}">← Back to List</a>
    <hr>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <br>
        <div>
            <label>Description:</label><br>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>
        <br>
        <div>
            <label>Status:</label><br>
            <select name="status">
                <option value="pending">Pending</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <br>
        <button type="submit">Save Project</button>
    </form>
</body>
</html>