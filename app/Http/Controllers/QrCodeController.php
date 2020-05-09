<?php

namespace App\Http\Controllers;

use App\Http\Requests\QrCodeRequest;
use App\Http\Requests\QrcodeUpdateReqest;
use App\QrCode;
use App\repository\CrudRepository;
use App\repository\QrCodeRepository;
use http\Client\Response;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud , QrCode $qrmodel )
    {
        //
       // $qrdata=new QrCodeRepository();
       // $qrArray=$qrdata->getAllData();
       //if(count( $qrdata->getAllData([0]))>0){
        $qrArray = $crud->getAllData($qrmodel);
        if(count( $qrArray )>0){
           return view('dashboard.dashboardpages.qrcode.update',compact('qrArray'));
       }else {
           return view('dashboard.dashboardpages.qrcode.index');
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
     * @param  QrCodeRequest  $request
     * @param QrCodeRepository $qrcoderepositry
     * @return \Illuminate\Http\Response
     */
    public function store(QrCodeRequest $request, CrudRepository $crud , QrCode $qrmodel )
    {
        //

        $crud->store($request ,$qrmodel);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QrCode  $qrCode
     * @return \Illuminate\Http\Response
     */
    public function show(QrCode $qrCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QrCode  $qrCode
     * @return \Illuminate\Http\Response
     */
    public function edit(QrCode $qrCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  QrcodeUpdateReqest  $request
     * @param  QrCodeRepository  $qrCodeRepository
     * @param $id
     * @return \Illuminate\Http\Response
     */

    public function update( QrCodeRequest $request, CrudRepository $crud , QrCode $qrmodel,$id)
    {
        //
        $crud->update($request,$id,$qrmodel);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QrCode  $qrCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(QrCode $qrCode)
    {
        //
    }
}
