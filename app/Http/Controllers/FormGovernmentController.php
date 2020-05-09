<?php

namespace App\Http\Controllers;

use App\FormGovernment;
use App\repositoryhome\GovenmentFormMail;
use App\Http\Requests\govermentRequest;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class FormGovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( govermentRequest $request , CrudRepository $crud , FormGovernment $govModel)
    {
        $crud->store($request,$govModel);
//        dd($request);
        $gov = new GovenmentFormMail();
        $gov->sendMail($request);
        return view('homepage.thanks_form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormGovernment  $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function show(FormGovernment $formGovernment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormGovernment  $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function edit(FormGovernment $formGovernment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormGovernment  $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormGovernment $formGovernment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormGovernment  $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormGovernment $formGovernment)
    {
        //
    }
}
