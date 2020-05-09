<?php


namespace App\repository;


use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\News;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class newsRepository
{
    /**
     * retrieve data from our storage
     *
     * @return News[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllData(){
        return News::all();

    }
    public $n=1;
    public $col4=[];
    public $col8=[];
    /**
     * @return array
     */
    public function hendelnewsdata()
    {



        $data=$this->getAllData();
        foreach ($data as $datan){

            if($this->n==1){
                $this->col4[]=$datan;
                $this->n++;

            }elseif ($this->n==3){
                $this->col8[]=$datan;
                $this->n=1;

            }else{

                $this->col8[]=$datan;
                $this->n++;
            }



        }
        return [
            'col4'=>$this->col4,
            'col8'=>$this->col8,
        ];
    }
    public  function  getAllDataAsasc()
    {
        return News::orderBy('created_at', 'desc')->get();
    }
    /**
     * retrieve record from our storage
     *
     * @return News[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getRecord($id){
        return News::find($id);

    }

    /**
     * save date in our storage
     * @param NewsRequest $request
     */
    public function store(NewsRequest $request){

        $news= new News();
        $news->title_en=$request->title_en;
        $news->title_ar=$request->title_ar;
        $news->news_en=$request->news_en;
        $news->news_ar=$request->news_ar;
        $news->alt=$request->alt;
        $news->slug_en=$request->slug_en;
        $news->slug_ar=$request->slug_ar;
        $news->meta=$request->meta;
        $news->created_by=Auth::user()->id;
        $imags=new UploadImage($news->title_en,'news',$request->images);
        $news->images=json_encode($imags->uploadeImages());

        $news->save();
    }

    /**
     * update data in storage
     * @param NewsUpdateRequest $request
     * @param $id
     */
    public function update(NewsUpdateRequest $request,$id){
        $news= News::find($id);
        $news->title_en=$request->title_en;
        $news->title_ar=$request->title_ar;
        $news->news_en=$request->news_en;
        $news->news_ar=$request->news_ar;
        $news->alt=$request->alt;
        $news->slug_en=$request->slug_en;
        $news->slug_ar=$request->slug_ar;
        $news->meta=$request->meta;
        if($request->hasFile('images')) {
            $news->created_by = Auth::user()->id;
            $imags = new UploadImage($news->title_en, 'news', $request->images);
            $news->images = json_encode($imags->uploadeImages());
        }

        $news->save();
    }

    /**
     * @param $id
     */
    public function destroy ($id){
        $news=News::find($id);
        $news->delete();
    }
}