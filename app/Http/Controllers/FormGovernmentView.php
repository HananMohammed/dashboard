<?php

namespace App\Http\Controllers;

use App\FormGovernment;
use App\Http\Requests\govermentRequest;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class FormGovernmentView extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud, FormGovernment $govModel)
    {
         $gov_data =$crud->getAllData($govModel );
         return view('dashboard.dashboardpages.forms.formGovernment' ,compact('gov_data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( )
    {

    }

    /**
     * Display the specified resource.
     *
     * @param \App\FormGovernment $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function show(CrudRepository $crud, FormGovernment $govModel ,$id)
    {
     $gov_data =$crud->getById($govModel,$id);
        return view('dashboard.dashboardpages.forms.govDetail' ,compact( 'gov_data'  ));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\FormGovernment $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function edit(FormGovernment $formGovernment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\FormGovernment $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormGovernment $formGovernment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\FormGovernment $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormGovernment $formGovernment)
    {
        //
    }
}
