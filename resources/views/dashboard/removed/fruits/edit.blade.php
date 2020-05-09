
@extends('dashboard.layaout.home')
{{--@php--}}
{{--//print_r($_REQUEST)--}}
{{--@endphp--}}
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('products.addproducts')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dproducts.store') }}" enctype="multipart/form-data" >
                                @csrf

                                <div class="form-group">
                                    <label for="car_name_en">{{trans('products.carname_en')}}</label>
                                    <input type="text"   name="car_name_en"   value="{{ old('car_name_en') }}" id="car_name_en" class="form-control">
                                    @if($errors->has('car_name_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('car_name_en')[0] }}</span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label for="car_name_ar">{{trans('products.carname_ar')}}</label>
                                    <input type="text"   name="car_name_ar" id="car_name_ar" value="{{ old('car_name_ar') }}"class="form-control">
                                    @if($errors->has('car_name_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('car_name_ar')[0] }}</span>
                                    @endif

                                </div>
                                @php
                                $name='name_'.trans('systems.lang');

                                @endphp
                                <div class="form-group">
                                <select id="brand" name="brand_id" class="form-control form-control-sm">
                                    <option>Select Brand</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                     @endforeach
                                </select>
                                </div>
                                <div class="form-group">
                                    <select id="classname" name="class_id" class="form-control form-control-sm">
                                        <option>-------</option>

                                    </select>
                                </div>

                                <!-- check box -->

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlSelect1"> {{trans('products.available')}}</label>--}}
{{--                                    <select multiple class="form-control" id="exampleFormControlSelect2">--}}
{{--                                        <option name="is_available"> Yes </option>--}}
{{--                                        <option name="is_available" > No </option>--}}

{{--                                    </select>--}}
{{--                                    @if($errors->has('is_available'))--}}
{{--                                         <span class="error">{{ $errors->get('is_available')[0] }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}


                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="is_available" value="1" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"> {{trans('products.available')}}</label>
                                </div>
                                <!-- end of  check box -->


                                <div class="form-group">
                                    <label for="price">{{trans('products.price')}}</label>
                                    <input type="text"   name="price" id="price" value="{{ old('price') }}" class="form-control"></input>
                                    @if($errors->has('price'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('price')[0] }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="Option_en">{{trans('products.Option_en')}}</label>
                                    <input type="text"   name="Option_en" id="Option_en"  value="{{ old('Option_en') }}"class="form-control"></input>
                                    @if($errors->has('Option_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Option_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Option_ar">{{trans('products.Option_ar')}}</label>
                                    <input type="text"   name="Option_ar" id="Option_ar"  value="{{ old('Option_ar') }}" class="form-control"></input>
                                    @if($errors->has('Option_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Option_ar')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Year">{{trans('products.Year')}}</label>
                                    <input type="text" name="Year"  value="{{ old('Year') }}" id="Year" class="form-control" placeholder="Enter the year ">

                                    @if($errors->has('Year'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Year')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Transmission_en">{{trans('products.Transmission_en')}}</label>
                                    <input type="text"   name="Transmission_en"  value="{{ old('Transmission_en') }}" id="Transmission_en" class="form-control"></input>
                                    @if($errors->has('Transmission_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Transmission_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Transmission_ar">{{trans('products.Transmission_en')}}</label>
                                    <input type="text"   name="Transmission_ar" id="Transmission_ar"   value="{{ old('Transmission_ar') }}" class="form-control"></input>
                                    @if($errors->has('Transmission_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Transmission_ar')[0] }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="Engine_en">{{trans('products.Engine_en')}}</label>
                                    <input type="text"   name="Engine_en"   value="{{ old('Engine_en') }}"id="Engine_en" class="form-control"></input>
                                    @if($errors->has('Engine_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Engine_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Engine_ar">{{trans('products.Engine_ar')}}</label>
                                    <input type="text"   name="Engine_ar"  value="{{ old('Engine_ar') }}" id="Engine_ar" class="form-control"></input>
                                    @if($errors->has('Engine_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Engine_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Fuel_en">{{trans('products.Fuel_en')}}</label>
                                    <input type="text"   name="Fuel_en" value="{{ old('Fuel_en') }}" id="Fuel_en" class="form-control"></input>
                                    @if($errors->has('Fuel_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Fuel_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Fuel_ar">{{trans('products.Fuel_ar')}}</label>
                                    <input type="text"   name="Fuel_ar"  value="{{ old('Fuel_ar') }}"  id="Fuel_ar" class="form-control"></input>
                                    @if($errors->has('Fuel_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Fuel_ar')[0] }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="Drive_Type_en">{{trans('products.Drive_Type_en')}}</label>
                                    <input type="text"   name="Drive_Type_en" value="{{ old('Drive_Type_en') }}"  id="Drive_Type_en" class="form-control"></input>
                                    @if($errors->has('Drive_Type_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Drive_Type_en')[0] }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="Drive_Type_ar">{{trans('products.Drive_Type_ar')}}</label>
                                    <input type="text"   name="Drive_Type_ar" value="{{ old('Drive_Type_ar') }}" id="Drive_Type_ar" class="form-control"></input>
                                    @if($errors->has('Drive_Type_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('Drive_Type_ar')[0] }}</span>
                                    @endif
                                </div>
                         <!-- Start of Color -->

                                <br>
                                <h4 class="lead">{{trans('products.color')}}</h4>
                                <div class="input-group form-group control-group increment" >
                                    <input type="color" id="color" name="color[]" class="form-control">

                                    <div class="input-group-btn">
                                        <button class="btn btn-success add_color" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                    @if($errors->has('color'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('color')[0] }}</span>
                                    @endif
                                </div>

                                <div class="clone hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="color" name="color[]" class="form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                        </div>
                                        @if($errors->has('color'))
                                            {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                            <span class="error">{{ $errors->get('color')[0] }}</span>
                                        @endif
                                    </div>
                                </div>


                                <!-- End of Color -->




                                <div class="form-group">
                                    <label for="overview_en">{{trans('products.overview_en')}}</label>
                                    <textarea type="text"   name="overview_en" value="{{ old('overview_en') }}"  id="overview_en" class="form-control"></textarea>
                                    @if($errors->has('overview_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('overview_en')[0] }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="overview_ar">{{trans('products.overview_ar')}}</label>
                                    <textarea type="text"   name="overview_ar" value="{{ old('overview_ar') }}" id="overview_ar" class="form-control"></textarea>
                                    @if($errors->has('overview_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('overview_ar')[0] }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="features_en">{{trans('products.features_en')}}</label>
                                    <textarea type="text"   name="features_en" value="{{ old('features_en') }}" id="features_en" class="form-control"></textarea>
                                    @if($errors->has('features_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('features_en')[0] }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="features_ar">{{trans('products.features_ar')}}</label>
                                    <textarea type="text"   name="features_ar" id="features_ar"  value="{{ old('features_ar') }}"class="form-control"></textarea>
                                    @if($errors->has('features_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('features_ar')[0] }}</span>
                                    @endif
                                </div>



                                <div class="input-group form-group control-group increment2" >
                                    <label for="color">{{trans('products.upload')}}  </label>
                                    <input type="file" id="imagename" name="images[]" class="form-control">

                                    <div class="input-group-btn">
                                        <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                    @if($errors->has('images'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                    @endif
                                </div>

                                <div class="clone2 hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="images[]" class="form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                        </div>
                                        @if($errors->has('images'))
{{--                                                {{dd($errors)}}--}}
                                            <span class="error">{{ $errors->get('images')[0] }}</span>
                                        @endif
                                    </div>
                                </div>

                                    <!--***************************title -description -keyword****************************************-->
                                @include('dashboard.removed.brand.seo')

                                <!--***********************end title -description -keyword********************************************-->



                                <br>
                                <button class="btn btn-success" type="submit">{{trans('products.addproducts')}}</button>

                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
            <script>
$('#brand').change(function(){

    var brandId = $(this).children("option:selected").val();
    // alert("You have selected the country - " + selectedCountry);
  //  console.log(brandId)
    fetch('../getBrandClasses/'+brandId)
        .then((response) => {
            return response.json();
        })
        .then((myJson) => {
            var data
            for (var i=0;i<myJson.length;i++){
                console.log(myJson[i]['id']);
                var id=myJson[i]['id'];
                var name=myJson[i]['name_en']
                var o = new Option(name, id);
                //$(o).html("<option> </option>");
                $("#classname").append(o);
            }
            console.log(myJson);
        });
});
              //  console.log($('#brand'));


            </script>

@endsection
