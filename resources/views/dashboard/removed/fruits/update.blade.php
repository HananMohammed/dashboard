
@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('products.updateproducts')}}</h5>
                        <div class="main-card p-5 card">
                             <form method="post" action="{{ route('dproducts.update', [$data->id]  ) }}" enctype="multipart/form-data" >

                                @csrf
                                @method('put')

                                 <div class="form-group">
                                     <label for="car_name_en">{{trans('products.carname_en')}}</label>
                                     <input type="text"  value="{{$data->car_name_en}}"  name="car_name_en" id="car_name_en" class="form-control">
                                     @if($errors->has('car_name_en'))
                                         {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('car_name_en')[0] }}</span>
                                     @endif

                                 </div>

                                 <div class="form-group">
                                     <label for="car_name_ar">{{trans('products.carname_ar')}}</label>
                                     <input type="text"  value="{{$data->car_name_ar}}"  name="car_name_ar" id="car_name_ar" class="form-control">
                                     @if($errors->has('car_name_ar'))
                                         {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('car_name_ar')[0] }}</span>
                                     @endif

                                 </div>

                                 @php
                                     $name='name_'.trans('systems.lang');

                                 @endphp
                                 <div class="form-group">
                                     <select id="brand1" name="" class="form-control form-control-sm">
                                         <option>Select Brand</option>
                                         @foreach($brands as $brand)
                                             <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <select id="classname1" name="" class="form-control form-control-sm">
                                         <option>-------</option>

                                     </select>
                                 </div>

                                 <div class="custom-control custom-switch">
                                     @if($data->is_available != null )
                                     <input type="hidden" name="is_available" value="" >
                                     @endif
                                     <input type="checkbox" name="is_available" @if($data->is_available == null ) @else checked  @endif  value="1"  class="custom-control-input" id="customSwitch1">

                                     <label class="custom-control-label" for="customSwitch1"> {{trans('products.available')}}</label>
                                 </div>
                                 <!-- end of  check box -->


                                 <div class="form-group">
                                     <label for="price">{{trans('products.price')}}</label>
                                     <input type="text"  value="{{$data->price}}"  name="price" id="price" class="form-control"></input>
                                     @if($errors->has('price'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('price')[0] }}</span>
                                     @endif
                                 </div>

                                 <div class="form-group">
                                     <label for="Option_en">{{trans('products.Option_en')}}</label>
                                     <input type="text"   value="{{$data->Option_en}}"  name="Option_en" id="Option_en" class="form-control"></input>
                                     @if($errors->has('Option_en'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Option_en')[0] }}</span>
                                     @endif
                                 </div>
                                 <div class="form-group">
                                     <label for="Option_ar">{{trans('products.Option_ar')}}</label>
                                     <input type="text"  value="{{$data->Option_ar}}"  name="Option_ar" id="Option_ar" class="form-control"></input>
                                     @if($errors->has('Option_ar'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Option_ar')[0] }}</span>
                                     @endif
                                 </div>
                                 <?php
                                  $dateDB =$data->Year;
                                  $newDate = strtotime($dateDB);

                                   ?>
                                 <div class="form-group">
                                     <label for="Year">{{trans('products.Year')}}</label>
                                     <input type="text"   name="Year" id="Year" class="form-control"  value="{{$data->Year}}">

                                     @if($errors->has('Year'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Year')[0] }}</span>
                                     @endif
                                 </div>
                                 <div class="form-group">
                                     <label for="Transmission_en">{{trans('products.Transmission_en')}}</label>
                                     <input type="text" value="{{$data->Transmission_en}}"  name="Transmission_en" id="Transmission_en" class="form-control"></input>
                                     @if($errors->has('Transmission_en'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Transmission_en')[0] }}</span>
                                     @endif
                                 </div>
                                 <div class="form-group">
                                     <label for="Transmission_ar">{{trans('products.Transmission_ar')}}</label>
                                     <input type="text" value="{{$data->Transmission_ar}}"   name="Transmission_ar" id="Transmission_ar" class="form-control"></input>
                                     @if($errors->has('Transmission_ar'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Transmission_ar')[0] }}</span>
                                     @endif
                                 </div>

                                 <div class="form-group">
                                     <label for="Engine_en">{{trans('products.Engine_en')}}</label>
                                     <input type="text" value="{{$data->Engine_en}}"  name="Engine_en" id="Engine_en" class="form-control"></input>
                                     @if($errors->has('Engine_en'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Engine_en')[0] }}</span>
                                     @endif
                                 </div>
                                 <div class="form-group">
                                     <label for="Engine_ar">{{trans('products.Engine_ar')}}</label>
                                     <input type="text" value="{{$data->Engine_ar}}"    name="Engine_ar" id="Engine_ar" class="form-control"></input>
                                     @if($errors->has('Engine_ar'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Engine_en')[0] }}</span>
                                     @endif
                                 </div>
                                 <div class="form-group">
                                     <label for="Fuel_en">{{trans('products.Fuel_en')}}</label>
                                     <input type="text"  value="{{$data->Fuel_en}}" name="Fuel_en" id="Fuel_en" class="form-control"></input>
                                     @if($errors->has('Fuel_en'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Fuel_en')[0] }}</span>
                                     @endif
                                 </div>
                                 <div class="form-group">
                                     <label for="Fuel_ar">{{trans('products.Fuel_ar')}}</label>
                                     <input type="text"  value="{{$data->Fuel_ar}}"  name="Fuel_ar" id="Fuel_ar" class="form-control"></input>
                                     @if($errors->has('Fuel_ar'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Fuel_ar')[0] }}</span>
                                     @endif
                                 </div>

                                 <div class="form-group">
                                     <label for="Drive_Type_en">{{trans('products.Drive_Type_en')}}</label>
                                     <input type="text"    value="{{$data->Drive_Type_en}}"  name="Drive_Type_en" id="Drive_Type_en" class="form-control"></input>
                                     @if($errors->has('Drive_Type_en'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Drive_Type_en')[0] }}</span>
                                     @endif
                                 </div>

                                 <div class="form-group">
                                     <label for="Drive_Type_ar">{{trans('products.Drive_Type_ar')}}</label>
                                     <input type="text"  value="{{$data->Drive_Type_ar}}" name="Drive_Type_ar" id="Drive_Type_ar" class="form-control"></input>
                                     @if($errors->has('Drive_Type_ar'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('Drive_Type_ar')[0] }}</span>
                                     @endif
                                 </div>
{{--                                 <div class="form-group">--}}
{{--                                     <label for="color">{{trans('products.color')}}</label>--}}
{{--                                     <input type="text"   value="{{$data->color}}" name="color" id="color" class="form-control"></input>--}}
{{--                                     @if($errors->has('color'))--}}
{{--                                         --}}{{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
{{--                                         <span class="error">{{ $errors->get('color')[0] }}</span>--}}
{{--                                     @endif--}}
{{--                                 </div>--}}

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
                                     <textarea type="text"   name="overview_en" id="overview_en" class="form-control">  {{$data->overview_en}}</textarea>
                                     @if($errors->has('overview_en'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('overview_en')[0] }}</span>
                                     @endif
                                 </div>

                                 <div class="form-group">
                                     <label for="overview_ar">{{trans('products.overview_ar')}}</label>
                                     <textarea type="text"   name="overview_ar" id="overview_ar" class="form-control">{{$data->overview_ar}}</textarea>
                                     @if($errors->has('overview_ar'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('overview_ar')[0] }}</span>
                                     @endif
                                 </div>

                                 <div class="form-group">
                                     <label for="features_en">{{trans('products.features_en')}}</label>
                                     <textarea type="text"   name="features_en" id="features_en" class="form-control">{{$data->features_en}}</textarea>
                                     @if($errors->has('features_en'))
                                         {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                         <span class="error">{{ $errors->get('features_en')[0] }}</span>
                                     @endif
                                 </div>

                                 <div class="form-group">
                                     <label for="features_ar">{{trans('products.features_ar')}}</label>
                                     <textarea type="text"   name="features_ar" id="features_ar" class="form-control">{{$data->features_ar}}</textarea>
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

{{--                                 <div class="input-group form-group control-group increment" >--}}
{{--                                     <label for="color">{{trans('products.upload')}}</label>--}}
{{--                                     <input type="file" id="imagename" name="images[]" class="form-control">--}}

{{--                                                                         <div class="input-group-btn">--}}
{{--                                                                             <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>--}}
{{--                                                                         </div>--}}
{{--                                     @if($errors->has('images'))--}}
{{--                                                                                         {{dd($errors->get('about_certificates_ar')[0])}}--}}
{{--                                         <span class="error">{{ $errors->get('images')[0] }}</span>--}}
{{--                                     @endif--}}
{{--                                 </div>--}}


{{--                                 <div class="clone2 hide">--}}
{{--                                     <div class="control-group input-group" style="margin-top:10px">--}}
{{--                                         <input type="file" name="images[]" class="form-control">--}}
{{--                                         <div class="input-group-btn">--}}
{{--                                             <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>--}}
{{--                                         </div>--}}
{{--                                         @if($errors->has('images'))--}}
{{--                                             --}}{{--                                                {{dd($errors)}}--}}
{{--                                             <span class="error">{{ $errors->get('images')[0] }}</span>--}}
{{--                                         @endif--}}
{{--                                     </div>--}}
{{--                                 </div>--}}


                                 @include('dashboard.removed.brand.seo_update',['data'=>$data])

                                 <br>
                                <button class="btn btn-success" type="submit">{{trans('products.addproducts')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

        @section('script')
            <script>
              //  var dateControl = document.querySelector('input[type="date"]');
            //    dateControl.value =' @php $date2=date_create($data->Year) ;echo(date_format($date2,'Y-m-d'));@endphp';
                $('#brand1').change(function(){

                    var brandId = $(this).children("option:selected").val();
                    // alert("You have selected the country - " + selectedCountry);
                    //  console.log(brandId)
                    fetch('../../getBrandClasses/'+brandId)
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
                                $("#classname1").append(o);
                            }
                            console.log(myJson);
                        });
                });
                //  console.log($('#brand'));


            </script>

@endsection
