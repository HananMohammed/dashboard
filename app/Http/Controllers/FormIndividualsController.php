<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormIndividualsRequest;
use App\FormIndividuals;
 use App\repositoryhome\IndividualFormMail;
use Illuminate\Http\Request;
use App\repository\CrudRepository;

class FormIndividualsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage.individualForm_finance' );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud , FormIndividuals $formModel , FormIndividualsRequest $req )
    {

        $crud->store($req,$formModel);
        $individual_repo = new IndividualFormMail();
        $individual_repo->sendMail($req);
        return view('homepage.thanks_form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormIndividuals  $formIndividuals
     * @return \Illuminate\Http\Response
     */
    public function show(FormIndividuals $formIndividuals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormIndividuals  $formIndividuals
     * @return \Illuminate\Http\Response
     */
    public function edit(FormIndividuals $formIndividuals)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormIndividuals  $formIndividuals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormIndividuals $formIndividuals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormIndividuals  $formIndividuals
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormIndividuals $formIndividuals)
    {
        //
    }
}
