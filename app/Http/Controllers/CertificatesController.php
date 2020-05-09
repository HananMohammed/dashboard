<?php

namespace App\Http\Controllers;

use App\Certificates;
use App\repository\certificatesRepositry;
use App\repository\CrudRepository;
 use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(CrudRepository $crud, Certificates $cert_db ){
        $certificatesData[][] =$crud->getAllData($cert_db);
        if(count($certificatesData[0])[0]>0){
        return view('dashboard.dashboardpages.certificates.certificatesedit',compact('certificatesData'));
        }else{
            return view('dashboard.dashboardpages.certificates.certificates');

        }

        // $certificatesData = $this->certificate ->certificatesData([0])[0];
       // dd($this->certificate ->certificatesData([0])[0]);
        /* if(count($certificatesData[0])[0]>0){
            return view('dashboard.dashboardpages.certificates.certificatesedit',compact('certificatesData'));

       }else{
           return view('dashboard.dashboardpages.certificates.certificates');

       }*/
     }
    /*public function index()
    {
        //
        $certificates=new certificatesRepositry();
        if(count($certificates->certificatesData([0]))>0){
            $certificatesData=$certificates->certificatesData([0])[0];
            return view('dashboard.dashboardpages.certificates.certificatesedit',compact('certificatesData'));
        }
        return view('dashboard.dashboardpages.certificates.certificates');
    }
*/
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
     * @param  \App\Http\Requests\Certificates  $request
     *
     * @param certificatesRepositry $certificatesRepositry
     * @param Certificates $certificates
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Certificates $request,CrudRepository $crud ,Certificates $certificates)
    {
        //dd($request);

        $crud->store($request,$certificates);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificates  $certificates
     * @return \Illuminate\Http\Response
     */
    public function show(Certificates $certificates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificates  $certificates
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificates $certificates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Certificates  $request
     * @param  certificatesRepositry  $certificates
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\CertificatesUpdate $request, CrudRepository $crud ,$id)
    {
        //

        $crud->update($request,$id,$crud);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificates  $certificates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificates $certificates)
    {
        //
    }
}
