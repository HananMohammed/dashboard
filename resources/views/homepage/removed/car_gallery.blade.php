
@section('style')
    <style>
        .navbar {background-color: transparent; transition: all 0.3s ease-in;}
        .navbar .nav-item a {color:#fff;}
        nav.scrolled {background-color: #fff;}
        nav.scrolled .nav-item a {color:#000;}
        .advantages-background {padding: 6% 0;}
        .gallery-text ul li {display: inline; border-radius: 50%; padding: 0px 10px; margin: 0 5px}
        .dat{text-algin: right;}
        .small-gallery .col img {height: 250px;}
        .car-dat1 span {color: #CE0638;}
    </style>
@endsection

@include('homepage.inc.header')
<div id="logo2">
    @include('homepage.inc.nave')
</div>
@include('homepage.inc.background_top')
@php
 $name='car_name_'.trans('systems.lang');
$Transmission='Transmission_'.trans('systems.lang');
$fuel='Fuel_'.trans('systems.lang');
$drive='Drive_Type_'.trans('systems.lang');
$overview='overview_'.trans('systems.lang');
$features ='features_'.trans('systems.lang');
//dd($dataproduct)
@endphp
@php $id='ids'; $i=0; @endphp
<div class="container carGallery py-4">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="gallery-data">
                <div class="row">
                    <div class="col-sm-12 p-0 car-gallery-title">
                        <div class="row justify-content-between no-gutters align-items-center">
                            <div class="col-md-6 car-dat1">
                                <a href="#" class="btn type1 car-gall">{{trans('car_gallery.gallery')}}</a>
                                <span class="ml-2"> {{$dataproduct->price}}</span>
                            </div>
                            <div class="col-md-6 dat">
                                <p class="mr-1 mb-0">{{$dataproduct->$name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 p-0">
            <div class="row">
                <div class="col-sm-12">
                    @foreach(json_decode($dataproduct['images'], true) as $image)
                    <div id="{{$i}}" class="picture" style="display:none">
                        <picture>
                            <source srcset="{{URL::asset('public/image').'/'.json_decode($dataproduct['images'], true)[0].'.webp'}}" type="image/webp">
                            <source srcset="{{URL::asset('public/image').'/'.json_decode($dataproduct['images'], true)[0]}}" type="image/jpg">
                            <img  src="{{URL::asset('public/image').'/'.json_decode($dataproduct['images'], true)[0]}}" class="w-100" alt="{{$dataproduct->$name}}">
                        </picture>
                    </div>
                        @php
                        $i++
                        @endphp
                    @endforeach

                </div>
            </div>
            <div class="row pt-0 pb-4 no-gutters small-gallery">
                @php
                    $i=0;
                    @endphp
                @foreach(json_decode($dataproduct['images'], true) as $image)
                    
                <div class="col">
                    <a href="javascript:void(0)"  onclick="openImg('{{$i}}');">
                        <picture>
                            <source srcset="{{URL::asset('public/image').'/'.json_decode($dataproduct['images'], true)[$i].'.webp'}}" type="image/webp">
                            <source srcset="{{URL::asset('public/image').'/'.json_decode($dataproduct['images'], true)[$i]}}" type="image/png">
                            <img class="img-fluid m-1" src="{{URL::asset('public/image').'/'.json_decode($dataproduct['images'], true)[0]}}" alt="{{$dataproduct->$name}}">
                        </picture>
                    </a>
                </div>
                    @php
                        $i++
                    @endphp
                @endforeach
            </div>
        </div>
        <div class="col-sm-12 my-2">
             <div class="gallery-data">
                 <div class="row justify-content-between">
                     <div class="col-md-3 col-sm-12">
                         <div class="gallery-text">
                             <p> {{trans('car_gallary.Year')}} {{$dataproduct->Year}}</p>
                             <p>Mileage: 700</p>
                             <p> {{trans('car_gallary.fuel')}}  {{$dataproduct->$fuel}}</p>
                             <p> {{trans('car_gallary.transmission')}} {{$dataproduct->$Transmission}}</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-12">
                         <div class="gallery-text">
{{--                             <p>Horsepower: 320</p>--}}
{{--                             <p>Price Type: Fixed</p>--}}
                             @if($dataproduct->is_available==1)
                             <p class="text-uppercase">{{trans('car_gallary.available')}}</p>
                             @else
                                 <p class="text-uppercase">{{trans('car_gallary.notavailable')}}</p>
                             @endif

                                 <ul class="list-unstyled">
                                 @foreach (json_decode($dataproduct['color'], true) as $color)
                                    <li style="background-color:{{$color}}"></li>
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-12 text-center my-auto">
                         <div class="gallery-text">
                             <p class="text-dark">{{$dataproduct->$name}}</p>
                             <a href="{{URL::to('/form')}}" class="btn type1 text-uppercase">book now</a>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
        <div class="col-sm-12">
             <div class="gallery-data">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                         <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">{{trans('car_gallary.overview')}} </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab" aria-controls="profile" aria-selected="false">{{trans('car_gallary.features')}}</a>
                     </li>
                 </ul>
                 <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                       {!! $dataproduct->$overview !!}
                     </div>
                     <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab" >
                         {!! $dataproduct->$features!!}
                               </div>
                 </div>
            </div>
        </div>
    </div>

</div>

@include('homepage.inc.background_bottom')
@section('script')
    <script>
        openImg("0");
    </script>

@endsection
@include('homepage.inc.footr')