<?php

namespace App\Http\Controllers;

use App\FormCompanies;
use Illuminate\Http\Request;
use Mail;
use App\BrandName;
use App\Http\Requests\FormCompanyRequest;
use App\repositoryhome\CompanyFormMail;
use App\repository\CrudRepository;

class FormCompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud, BrandName $brand)
    {
       // $brands = $crud->getAllData($brand);
        return view('homepage.formCompany' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,FormCompanies $formCompaniesmodel ,FormCompanyRequest $req)
    {
         $crud->store($req,$formCompaniesmodel);
         $company_repo = new CompanyFormMail();
        $company_repo->sendMail($req);
        return view('homepage.thanks_form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormCompanies  $formCompanies
     * @return \Illuminate\Http\Response
     */
    public function show(FormCompanies $formCompanies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormCompanies  $formCompanies
     * @return \Illuminate\Http\Response
     */
    public function edit(FormCompanies $formCompanies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormCompanies  $formCompanies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormCompanies $formCompanies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormCompanies  $formCompanies
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormCompanies $formCompanies)
    {
        //
    }
}
