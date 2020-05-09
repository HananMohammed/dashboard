@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('brand_class.brandclass')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dbrandclass.update',[$data->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="name_ar">{{trans('brand.name_ar')}}</label>
                                    <input type="text"  value="{{$data->name_ar}}"  name="name_ar" id="name_ar" class="form-control">

                                    @if($errors->has('name_ar'))

                                        <span class="error">{{$errors->get('name_ar')[0]}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name_en">{{trans('brand.name_en')}}</label>
                                    <input type="text"   value="{{$data->name_en}}" name="name_en" id="name_en" class="form-control">

                                    @if($errors->has('name_en'))

                                        <span class="error">{{$errors->get('name_en')[0]}}</span>
                                    @endif
                                </div>
                                @php
                                    $name='name_'.trans('systems.lang');

                                @endphp
                                <div class="form-group">
                                    <label for="brand_id">{{trans('brand_class.brand_id')}}</label>
{{--                                    <input type="text"   value="{{$data->brand_id}}"  name="brand_id" id="brand_id" class="form-control">--}}

                                    <select name="brand_id" class="form-control form-control-sm">
                                        <option>Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('name_en'))

                                        <span class="error">{{$errors->get('name_en')[0]}}</span>
                                    @endif
                                </div>

                                @include('dashboard.removed.brand.seo_update',['data'=>$data])
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('brand_class.add')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
