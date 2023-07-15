<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Student::all();
        return response()->view('cms.students.index', ['students' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cms.students.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // 970599123123
        $request->validate([
            'student_name' => 'required|string|min:3|max:30|unique:students,name',
            'student_email'=>  'nullable|string|email|unique:students,email',
            'student_mobile'=> 'required|numeric|digits:12',
            'student_address'=>'nullable|string|max:100',
            'student_gender'=>'nullable|string|in:male,female',

        ]);
        
        // 1- Eloquent
        $student = new Student();
        $student->name = $request->input('student_name');
        $student->email = $request->input('student_email');
        $student->mobile = $request->input('student_mobile');
        $student->address = $request->input('student_address');
        $student->gender = $request->input('student_gender');

        $saved = $student->save();
        
        // if($saved){
        //     Mail::to($request->student())->send(new studentWelcomeEmail($student));
        // }
        //-----------------------------------------------------------------------
        
        return redirect()->route('students.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::findOrFail($id);
        return response()->view('cms.students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
                // dd(request()->all());
                $request->validate([
                    'student_name' => 'required|string|min:3|max:30|unique:students,name,' .$id,
                    'student_email'=>  'nullable|string|email|unique:students,email,' .$id,
                    'student_mobile'=> 'required|numeric|digits:12',
                    'student_address'=>'nullable|string|max:100',
                    'student_gender'=>'nullable|string|in:male,female',
                ]);
        
                //Eloquent
                // $student = student::find($id);
                $student = Student::findOrFail($id);
                $student->name = $request->input('student_name');
                $student->email = $request->input('student_email');
                $student->mobile = $request->input('student_mobile');
                $student->address = $request->input('student_address');
                $student->gender = $request->input('student_gender');
                $saved = $student->save();
                return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::findOrFail($id);
        $delete = $student->delete();

        return redirect()->back();
    }
}
