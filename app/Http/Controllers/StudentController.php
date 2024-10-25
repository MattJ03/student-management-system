<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $student = Student::all();
       return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             $validatedDate = $request->validate([
            'name' => 'required|string|max:20',
            'age' => 'required|integer|max:20',
            'gender' => 'required|in:M,F',
            'course' => 'required|string|max:20|in:Accounting, Anthropology, Architecture, Art History, Biology, Business Administration, Chemical Engineering, Chemistry, Civil Engineering, Communications, Computer Science, Criminal Justice, Data Science, Design, Economics, Education, Electrical Engineering, English, Environmental Science, Film Studies, Finance, Fine Arts, Geography, Graphic Design, Health Sciences, History, Hospitality Management, Human Resources, Information Technology, International Relations, Journalism, Law, Management, Marketing, Mathematics, Mechanical Engineering, Medicine, Music, Nursing, Philosophy, Physics, Political Science, Psychology, Public Health, Public Relations, Religious Studies, Social Work, Sociology, Software Engineering, Statistics, Theatre Arts, Veterinary Science',
            'email' => 'required|string|email|max:255|unique:students'
        ]);
   Student::create($validatedDate);
   return redirect()->route('student.index')->with('success', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return redirect()->route('student.index')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return redirect()->route('student.index')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedDate = $request->validate([
            'name' => 'required|string|max:20',
            'age' => 'required|integer|max:20',
            'gender' => 'required|in:M,F',
            'course' => 'required|string|max:20|in:Accounting, Anthropology, Architecture, Art History, Biology, Business Administration, Chemical Engineering, Chemistry, Civil Engineering, Communications, Computer Science, Criminal Justice, Data Science, Design, Economics, Education, Electrical Engineering, English, Environmental Science, Film Studies, Finance, Fine Arts, Geography, Graphic Design, Health Sciences, History, Hospitality Management, Human Resources, Information Technology, International Relations, Journalism, Law, Management, Marketing, Mathematics, Mechanical Engineering, Medicine, Music, Nursing, Philosophy, Physics, Political Science, Psychology, Public Health, Public Relations, Religious Studies, Social Work, Sociology, Software Engineering, Statistics, Theatre Arts, Veterinary Science',
            'email' => 'required|string|email|max:255|unique:students,'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
