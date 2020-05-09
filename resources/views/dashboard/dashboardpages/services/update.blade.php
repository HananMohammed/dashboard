@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">

                        <h5 class="card-title">{{trans('services.update')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dservices.update',[$data->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="title_en">{{trans('services.title_en')}}</label>
                                    <input type="text" value="{{$data->title_en}}"  name="title_en" id="title_en" class="form-control">


                                </div>
                                <div class="form-group">
                                    <label for="title_ar">{{trans('services.title_ar')}}</label>
                                    <input type="text" value="{{$data->title_ar}}"   name="title_ar" id="title_ar" class="form-control">


                                </div>
                                <div class="form-group">
                                    <label for="des_en">{{trans('services.des_en')}}</label>
                                    <textarea type="text"   name="des_en" id="des_en" class="form-control">{{$data->des_en}}</textarea>


                                </div>
                                <div class="form-group">
                                    <label for="des_ar">{{trans('services.des_ar')}}</label>
                                    <textarea type="text"   name="des_ar" id="des_ar" class="form-control">{{$data->des_ar}}</textarea>


                                </div>

                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="image_path" class="form-control">

                                </div>
                                <br>

                                <br>
                                <button class="btn btn-success" type="submit">{{trans('services.update')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
