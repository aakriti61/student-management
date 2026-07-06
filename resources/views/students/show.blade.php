<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .detail-row { margin-bottom: 10px; }
        .label { font-weight: bold; display: inline-block; width: 160px; }
        .back { display: inline-block; margin-bottom: 20px; }
    </style>
</head>
<body>

    <a href="{{ route('students.index') }}" class="back">&larr; Back to list</a>

    <h1>Student Details</h1>

    <div class="detail-row"><span class="label">Roll Number:</span> {{ $student->roll_number }}</div>
    <div class="detail-row"><span class="label">Name:</span> {{ $student->name }}</div>
    <div class="detail-row"><span class="label">Email:</span> {{ $student->email }}</div>
    <div class="detail-row"><span class="label">Phone:</span> {{ $student->phone }}</div>
    <div class="detail-row"><span class="label">Address:</span> {{ $student->address }}</div>
    <div class="detail-row"><span class="label">Gender:</span> {{ $student->gender }}</div>
    <div class="detail-row"><span class="label">Course:</span> {{ $student->course }}</div>
    <div class="detail-row"><span class="label">Enrollment Date:</span> {{ $student->enrollment_date }}</div>
    <div class="detail-row"><span class="label">Added On:</span> {{ $student->created_at->format('d M Y, h:i A') }}</div>

</body>
</html>