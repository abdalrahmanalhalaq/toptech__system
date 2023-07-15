<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $divisions = Division::all();
        return response()->view('cms.divisions.index', ['divisions'=>$divisions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cms.divisions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
                // dd($request->all());
        $request->validate([
            'name' => 'required|string|min:3|max:30|unique:divisions,name',
            'hours'=>  'nullable|string',
            'price'=> 'required|numeric',
            'status'=>'nullable',
            'finished_at'=>'nullable|date',
            'min_student_to_open'=>'nullable|string',

        ]);

        // 1- Eloquent
        $divisions = new Division();
        $divisions->name = $request->input('name');
        $divisions->hours = $request->input('hours');
        $divisions->price = $request->input('price');
        $divisions->status = $request->input('status');
        $divisions->finished_at = $request->input('finished_at');
        $divisions->min_student_to_open = $request->input('min_student_to_open');

        $saved = $divisions->save();

        // if($saved){
        //     Mail::to($request->divisions())->send(new divisionsWelcomeEmail($divisions));
        // }
        //-----------------------------------------------------------------------

        return redirect()->route('divisions.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $divisions = Division::findOrFail($id);
        return response()->view('cms.divisions.edit', ['divisions' => $divisions]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        //
                // dd($request->all());
        $request->validate([
            'name' => 'required|string|min:3|max:30|unique:divisions,name,' . $id,
            'hours'=>  'nullable|string',
            'price'=> 'required|numeric',
            'status'=>'nullable',
            'finished_at'=>'nullable|date',
            'min_student_to_open'=>'nullable|string',

        ]);

        // 1- Eloquent
        $divisions = Division::findOrFail($id);
        $divisions->name = $request->input('name');
        $divisions->hours = $request->input('hours');
        $divisions->price = $request->input('price');
        $divisions->status = $request->input('status');
        $divisions->finished_at = $request->input('finished_at');
        $divisions->min_student_to_open = $request->input('min_student_to_open');

        $saved = $divisions->save();

        // if($saved){
        //     Mail::to($request->divisions())->send(new divisionsWelcomeEmail($divisions));
        // }
        //-----------------------------------------------------------------------

        return redirect()->route('divisions.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        {
            //
            $division = Division::findOrFail($id);
            $deleted = $division->delete();

            return redirect()->back();
        }
    }
}
