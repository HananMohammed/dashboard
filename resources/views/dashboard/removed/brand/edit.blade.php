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
                            <form method="post" action="{{ route('dbrand.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="name_ar">{{trans('brand.name_ar')}}</label>
                                    <input type="text"   name="name_ar" id="name_ar" class="form-control">
                                    @if($errors->has('name_ar'))

                                        <span class="error">{{$errors->get('name_ar')[0]}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name_en">{{trans('brand.name_en')}}</label>
                                    <input type="text"   name="name_en" id="name_en" class="form-control">
                                    @if($errors->has('name_en'))

                                        <span class="error">{{$errors->get('name_en')[0]}}</span>
                                    @endif

                                </div>

                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="image_path" class="form-control">
                                    @if($errors->has('image_path'))

                                        <span class="error">{{$errors->get('image_path')[0]}}</span>
                                    @endif
                                </div>
                                @include('dashboard.removed.brand.seo')
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('brand.add')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
