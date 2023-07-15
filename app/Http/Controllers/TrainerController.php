<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Trainer::all();
        return response()->view('cms.trainers.index', ['trainers' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cms.trainers.create');
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
            'trainer_name' => 'required|string|min:3|max:30|unique:trainers,name',
            'trainer_email' =>  'nullable|string|email|unique:trainers,email',
            'trainer_mobile' => 'required|numeric|digits:12',
            'trainer_address' => 'nullable|string|max:100',
            'trainer_gender' => 'nullable|string|in:male,female',

        ]);

        // 1- Eloquent
        $trainer = new Trainer();
        $trainer->name = $request->input('trainer_name');
        $trainer->email = $request->input('trainer_email');
        $trainer->mobile = $request->input('trainer_mobile');
        $trainer->address = $request->input('trainer_address');
        $trainer->gender = $request->input('trainer_gender');

        $saved = $trainer->save();

        // if($saved){
        //     Mail::to($request->trainer())->send(new trainerWelcomeEmail($trainer));
        // }
        //-----------------------------------------------------------------------

        return redirect()->route('trainers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trainer = Trainer::findOrFail($id);
        return response()->view('cms.trainers.edit', ['trainer' => $trainer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd(request()->all());
        $request->validate([
            'trainer_name' => 'required|string|min:3|max:30|unique:trainers,name,' .$id,
            'trainer_email' =>  'nullable|string|email|unique:trainers,email,' .$id,
            'trainer_mobile' => 'required|numeric|digits:12',
            'trainer_address' => 'nullable|string|max:100',
            'trainer_gender' => 'nullable|string|in:male,female',
        ]);

        //Eloquent
        // $trainer = trainer::find($id);
        $trainer = Trainer::findOrFail($id);
        $trainer->name = $request->input('trainer_name');
        $trainer->email = $request->input('trainer_email');
        $trainer->mobile = $request->input('trainer_mobile');
        $trainer->address = $request->input('trainer_address');
        $trainer->gender = $request->input('trainer_gender');
        $saved = $trainer->save();
        return redirect()->route('trainers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $trainer = Trainer::findOrFail($id);
        $delete = $trainer->delete();

        return redirect()->back();
    }
}
