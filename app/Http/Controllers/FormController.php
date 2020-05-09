<?php

namespace App\Http\Controllers;
use \App\Http\Controllers\SeoController;
use App\form;
use App\Http\Requests\formReq;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\PhpMail;
use App\repository\formRepo;
use App\repositoryhome\FotterRepo;
use App\repositoryhome\PhpMalirRepo;
use App\Seo;
use Illuminate\Http\Request;
 use App\repository\CrudRepository;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FotterRepo $repo)
    {

        $data = $repo->footerCollection();
     return view('homepage.form' ,compact('data'));
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


    //
    public  function store(formReq $request){
        //dd($request);
        $repo=new formRepo();
        $repo->sendMail($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(form $form)
    {
        //
    }
}
