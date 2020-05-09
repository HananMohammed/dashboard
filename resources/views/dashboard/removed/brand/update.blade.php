@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">

                        <h5 class="card-title">{{trans('brand.brand')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dbrand.update',[$data->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="title">{{trans('brand.name_en')}}</label>
                                    <input type="text" value="{{$data->name_en}}"   name="name_en" id="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="title">{{trans('brand.name_ar')}}</label>
                                    <input type="text" value="{{$data->name_ar}}"   name="name_ar" id="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="text">{{trans('partners.image')}}</label>
                                    <input type="file" value="{{$data->image_path}}"   name="image_path" id="image_path" class="form-control">
                                    @if($errors->has('image_path'))

                                        <span class="error">{{$errors->get('image_path')[0]}}</span>
                                    @endif
                                </div>
                          @include('dashboard.removed.brand.seo_update',['data'=>$data])
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('brand.update')}}</button>
{{--@php--}}
{{--dd($data);--}}
{{--@endphp--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
