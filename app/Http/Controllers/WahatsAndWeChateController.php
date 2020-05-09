<?php

namespace App\Http\Controllers;

use App\Http\Requests\WhatsAndWeChatRequest;
use App\repository\CrudRepository;
use App\repository\WhatsAndWeRepository;
use App\WahatsAndWeChate;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;

class WahatsAndWeChateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud , WahatsAndWeChate $wechat )
    {
        /*$repo=new WhatsAndWeRepository();
        $phones=$repo->Phones();
        $data = $repo->getAllData();*/
        $phones = $crud->Phones();
        $data =  $crud ->getAllData($wechat);
        if(count($data)>0) {
            return view('dashboard.dashboardpages.whats.update', compact('phones', 'data'));
        }else{

            return view('dashboard.dashboardpages.whats.index', compact('phones', 'data'));
            //
        }
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
     * @param WhatsAndWeChatRequest  $request
     * @param WhatsAndWeRepository $whatsAndWeRepository
     * @return \Illuminate\Http\Response
     */
    public function store(WhatsAndWeChatRequest $request ,CrudRepository $crud , WahatsAndWeChate $wechat)
    {
        //
        $crud->store($request,$wechat);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WahatsAndWeChate  $wahatsAndWeChate
     * @return \Illuminate\Http\Response
     */
    public function show(WahatsAndWeChate $wahatsAndWeChate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WahatsAndWeChate  $wahatsAndWeChate
     * @return \Illuminate\Http\Response
     */
    public function edit(WahatsAndWeChate $wahatsAndWeChate)
    {
        //
    }

    /**
     * Update a newly created resource in storage.
     *
     * @param WhatsAndWeChatRequest  $request
     * @param WhatsAndWeRepository $whatsAndWeRepository
     * @return \Illuminate\Http\Response
     */
    public function update (WhatsAndWeChatRequest $request  ,CrudRepository $crud , WahatsAndWeChate $wechat,$id)
    {
        //
        $crud->update($request,$id,$wechat );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WahatsAndWeChate  $wahatsAndWeChate
     * @return \Illuminate\Http\Response
     */
    public function destroy(WahatsAndWeChate $wahatsAndWeChate)
    {
        //
    }
}
