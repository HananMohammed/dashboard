<?php

namespace App\Http\Controllers;

use App\BrandName;
use App\Http\Requests\SaleRequest;
use App\Sale;
use Illuminate\Http\Request;
use App\repository\CrudRepository;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud, Sale $sale)
    {

        $data = $crud->getAllData($sale);

        return view('dashboard.dashboardpages.sale.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( CrudRepository $crud , BrandName $brandName)
    {
        $brands =$crud->getAllData($brandName);

        return view('dashboard.dashboardpages.sale.edit' ,compact('brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request,CrudRepository $crud , Sale $sale)
    {

          $store =  $crud->store($request,$sale);
        return redirect()->route('dsale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     *
     */
    public function edit($id, CrudRepository $crudRepository,Sale $modelname ,BrandName $brandName)
    {


        $brands=$crudRepository->getAllData($brandName);

       $data=$crudRepository->getById($modelname,$id);
       return view('dashboard.dashboardpages.sale.update',compact('data','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRepository $crudRepository ,$id , Sale $modelname,SaleRequest $request)
    {
        $crudRepository->update($request ,$id,$modelname);
        return redirect(route('dsale.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(  CrudRepository $crudRepository,Sale $modelname ,$id)
    {

        $crudRepository->delete($id , $modelname);
        return redirect()->back();

     }

}
