<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\SocialDataRequest;
use App\repository\CrudRepository;
use App\repository\ScoialRepository;
use App\SocialData;
use App\SocialIcon;
use Illuminate\Http\Request;

class SocialDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud,SocialIcon $socialModel ,SocialData $socialDataModel )
    {

      //$soialIcon=new SocialIcon();
       // $soialArray=$soialIcon::all();
        //$soialData=new ScoialRepository();
        //$sData=$soialData->getAllSocialData();
        $soialArray= $crud->getAllData($socialModel);
        $sData=$crud->getAllData($socialDataModel);
          return view('dashboard.dashboardpages.social.social',compact('soialArray','sData'));
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
     * @param  SocialDataRequest $request
     * @param ScoialRepository $ScoialRepository
     * @return \Illuminate\Http\Response
     */
    public function store(SocialDataRequest $request ,CrudRepository $crud, SocialData $socialDataModel)
    {
        //
        $crud->store($request,$socialDataModel);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SocialData  $socialData
     * @return \Illuminate\Http\Response
     */
    public function show(SocialData $socialData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialData  $socialData
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialData $socialData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialData  $socialData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialData $socialData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @param ScoialRepository $scoialRepository
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ScoialRepository $scoialRepository)
    {
        //
        $scoialRepository->destroy($id);
        return redirect()->back();
    }
}
