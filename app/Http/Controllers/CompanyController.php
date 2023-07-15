<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Company::all();
        return response()->view('cms.companies.index', ['companies' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.companies.create');
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
            'company_name' => 'required|string|min:3|max:30|unique:companies,name',
            'company_mobile' => 'required|numeric|digits:12',
            'company_note' => 'nullable|string|max:100',
        ]);

        // Eloquent Company
        $company = new Company();
        $company->name = $request->input('company_name');
        $company->mobile = $request->input('company_mobile');
        $company->note = $request->input('company_note');
        $saved = $company->save();

        // if($saved){
        //     Mail::to($request->company())->send(new companyWelcomeEmail($company));
        // }
        //-----------------------------------------------------------------------

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $company = Company::findOrFail($id);
        return response()->view('cms.companies.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd(request()->all());
        $request->validate([
            'company_name' => 'required|string|min:3|max:20|unique:companies,name,' .$id,
            'company_mobile' => 'required|numeric|digits:12',
            'company_note' => 'nullable|string|max:100',
        ]);

        //-----------------------------------
        //Eloquent
        $company = Company::findOrFail($id);
        $company->name = $request->input('company_name');
        $company->mobile = $request->input('company_mobile');
        $company->note = $request->input('company_note');
        $saved = $company->save();

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = Company::findOrFail($id);
        $delete = $user->delete();
        return redirect()->back();
    }
}
