<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\News;
use App\repository\CrudRepository;
use App\repository\newsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud ,News $new)
    {
        //
       // $newsData=new newsRepository();
       // $newsArray=$newsData->getAllData();
       $newsArray=$crud->getAllData($new);
        return view('dashboard.dashboardpages.news.index',compact('newsArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.dashboardpages.news.newsedit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NewsRequest  $request
     * @param newsRepository $newsRepository
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request ,CrudRepository $crud ,News $new)
    {
        //
        $crud->store($request ,$new);
        return redirect(route('dnews.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @param newsRepository $newsRepository
     * @return \Illuminate\Http\Response
     */
    public function edit($id ,CrudRepository $crud ,News $new)
    {
       $record= $crud->getById($new,$id);

        return view('dashboard.dashboardpages.news.newsupdate',compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NewsUpdateRequest  $request
     * @param  newsRepository $newsRepository
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdateRequest $request,News $new,  CrudRepository $crud,$id)
    {
        //
        $crud->update($request,$id,$new);
        return redirect(route('dnews.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  newsRepository  $newsRepository
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudRepository $crud ,News $new ,$id)
    {
        //
 $crud->delete($id ,$new );
         return redirect()->back();
    }
}
