@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">

                        <h5 class="card-title">{{trans('gallary.gallary')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dgallary.update',[$data->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="title">{{trans('gallary.title')}}</label>
                                    <input type="text" value="{{$data->title}}"   name="title" id="title" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="text">{{trans('gallary.image')}}</label>
                                    <input type="file" value="{{$data->image_path}}"   name="image_path" id="image_path" class="form-control">
                                </div>

                                <br>
                                <button class="btn btn-success" type="submit">{{trans('gallary.update')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
