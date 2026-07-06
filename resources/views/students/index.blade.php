<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f4f4f4; }
        .btn { padding: 4px 10px; text-decoration: none; border-radius: 4px; font-size: 14px; }
        .btn-edit { background-color: #4CAF50; color: white; }
        .btn-delete { background-color: #e53935; color: white; border: none; cursor: pointer; }
        .btn-add { background-color: #2196F3; color: white; padding: 8px 16px; }
    </style>
</head>
<body>

    <h1>Student Management System</h1>

    <a href="{{ route('students.create') }}" class="btn btn-add">+ Add New Student</a>

    <br><br>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->roll_number }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-edit">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>