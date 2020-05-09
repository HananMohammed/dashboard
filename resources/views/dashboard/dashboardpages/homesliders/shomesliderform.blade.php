@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('slider.addSlide')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dslider.store') }}" enctype="multipart/form-data" >
                            @csrf
                                <div class="form-group">
                                    <label for="title_en">{{trans('slider.title_en')}}</label>
                                    <input type="text"   name="title_en" id="title_en" class="form-control">


                                </div>
                                <div class="form-group">
                                    <label for="title_ar">{{trans('slider.title_ar')}}</label>
                                    <input type="text"   name="title_ar" id="title_ar" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description_en">{{trans('slider.description_en')}}</label>
                                    <input type="text"   name="description_en" id="description_en" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description_ar">{{trans('slider.description_ar')}}</label>
                                    <input type="text"   name="description_ar" id="description_ar" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="alt">{{trans('slider.alt')}}</label>
                                    <input type="text"   name="alt" id="alt" class="form-control">
                                </div>

                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="image_path" class="form-control">

                                    </div>
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('slider.addSlide')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection