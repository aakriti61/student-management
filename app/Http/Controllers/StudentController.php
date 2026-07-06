<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'roll_number' => 'required|string|unique:students,roll_number',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'phone' => 'required|string|max:20',
        'address' => 'required|string',
        'gender' => 'required|in:Male,Female,Other',
        'course' => 'required|string',
        'enrollment_date' => 'required|date',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
