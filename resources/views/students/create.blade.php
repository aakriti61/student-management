<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input, select { width: 300px; padding: 6px; margin-top: 4px; }
        .btn { margin-top: 20px; padding: 8px 16px; background-color: #2196F3; color: white; border: none; cursor: pointer; border-radius: 4px; }
        .error { color: red; font-size: 14px; }
        .back { display: inline-block; margin-bottom: 20px; }
    </style>
</head>
<body>

    <a href="{{ route('students.index') }}" class="back">&larr; Back to list</a>

    <h1>Add New Student</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Roll Number</label>
        <input type="text" name="roll_number" value="{{ old('roll_number') }}">

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone') }}">

        <label>Address</label>
        <input type="text" name="address" value="{{ old('address') }}">

        <label>Gender</label>
        <select name="gender">
            <option value="">-- Select --</option>
            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
        </select>

        <label>Course</label>
        <input type="text" name="course" value="{{ old('course') }}">

        <label>Enrollment Date</label>
        <input type="date" name="enrollment_date" value="{{ old('enrollment_date') }}">

        <button type="submit" class="btn">Save Student</button>
    </form>

</body>
</html>