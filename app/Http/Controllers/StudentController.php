<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index',['students' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'fullname' => 'required|string',
            'gender'=> 'required|string',
            'residence'=> 'required|string',
            'contact'=> 'required|string',
            'age'=> 'required|int'
        ]);
        student::create([
            'fullname'=>$request->fullname,
            'gender'=>$request->gender,
            'residence'=>$request->residence,
            'contact'=>$request->contact,
            'age'=>$request->age,
        ]);
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)    // Studentis a model.
    {
        return view('student.show',['student'=>$student]);    // pass a single data for a single student
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student) 
    {
        $request->validate([
            
                        'fullname' => 'required|string',
                        'gender'=> 'required|string',
                        'residence'=> 'required|string',
                        'contact'=> 'required|string',
                        'age'=> 'required|int'
                    ]);




        $student->fullname = $request->fullname;        
        $student->gender = $request->gender;        
        $student->residence = $request->residence;        
        $student->contact = $request->contact; 
        $student->age = $request->age; 
        $student->save();      
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();  
        return back();
    }
}
