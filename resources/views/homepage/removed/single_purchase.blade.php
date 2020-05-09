
@section('style')
    <style>
        .navbar {background-color: transparent; transition: all 0.3s ease-in;}
        .navbar .nav-item a {color:#fff;}
        nav.scrolled {background-color: #fff;}
        nav.scrolled .nav-item a {color:#000;}
        .advantages-background {padding: 7% 0;}
        #allProducts .item {
            width: 100px;
            height: 100px;
            margin: auto;
        }
        .carousel-item img {height: 265px !important; width: 100%;}
        .carousel-indicators {top: 85%;}
        .filterCars .container {width: 80%;}
        .select-option select {width: 100%}
        .carousel-indicators li , .carousel-indicators li.active{border-radius: 0;padding: 0 10px; height: 3px;}
        .productDeatils ul {background-color: transparent; display: block;}
        .productDeatils ul li {border:0;display: block;padding:0;}
        .productDeatils ul li a {color: #000;}
        .advantages-background {height : 30vh;}
        .overview-info {font-size: 16px; font-weight: 300;}
        .car-content-bg {background-color: #F3F3F3; box-shadow: 2px 6px 8px rgba(0, 0, 0, 0.16);}
        .product-price {background-color: #CE0638;}

    </style>
@endsection
@php
    $title='title_'.trans('systems.lang');
    $description='des_'.trans('systems.lang');
    $route='s_'.trans('systems.lang');
    $carName='car_name_'.trans('systems.lang');
    $option='Option_'.trans('systems.lang');
    $transmission='Transmission_'.trans('systems.lang');
    $engine='Engine_'.trans('systems.lang');
    $overview='overview_'.trans('systems.lang');
@endphp


@include('homepage.inc.header')
<div id="logo2">
    @include('homepage.inc.nave')
</div>



@php
    $title='title_'.trans('systems.lang');
    $description='description_'.trans('systems.lang')
@endphp
@php
    $name='name_'.trans('systems.lang');

@endphp
@include('homepage.inc.background_top')
<div id="allProducts" class="container">
    @include('homepage.inc.car_brand')
    <div class="row justify-content-between ">
        <div class="col-sm-4 d-sm-block d-md-none">
          {{-- <div class="filterCars  text-white">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-12 mb-2 text-center">
                            <div class="select-option text-white">
                                <select id="brand" name="" class="py-2 px-3" name="" id="">
                                    <option value="" >Select Car Brand</option>
                                    @foreach($data['brands'] as $brand)
                                        <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class=" col-sm-12 mb-2 text-center">
                            <div class="select-option text-white">
                                <select id="classname" name=""   class="py-2 px-4" name="" id="">
                                    <option value="">Select Car Class</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-2 text-center">
                            <div class="select-option text-white">
                                <select  id="carname" name="" class="py-2 px-4" name="" id="">
                                    <option value="">Select Car </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-2 text-center">
                            <div class="allCars ">
                                <a class="btn text-uppercase py-3 px-5 type1">{{trans('filter.showbtn')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
        <div class="col-sm-8">
            <div class="car-products">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{trans('purchase.cars')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{{trans('purchase.offers')}}</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane  fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            @foreach ($data['products'] as $pro)
                                @php
                               // dd($pro->overview_en)
                                @endphp
                                <a href="{{URL::to('/car-gallery').'/'.$pro->id}}">
                                    <div class="col-sm-12 my-2">
                                        <div class="single-car-data py-1 car-content-bg">
                                            <div class="row align-items-center">
                                                <!--carousal for single car-->
                                                <div class="col-md-6 col-sm-12">
                                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            @for($i=0;$i<count(json_decode($pro->images,false)) ;$i++)
                                                                <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}" class="@if($i==0) active  @endif "></li>
                                                            @endfor
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            @for($i=0;$i<count(json_decode($pro->images,false)) ;$i++)
                                                                <div class="carousel-item  @if ($i == 0)active @endif ">
                                                                    <picture>
                                                                        <source srcset="{{URL::asset('public/image').'/'.json_decode($pro->images,false)[$i].'.webp'}}" type="image/webp">
                                                                        <source srcset="{{URL::asset('public/image').'/'.json_decode($pro->images,false)[$i]}}" type="image/png">
                                                                        <img src="{{URL::asset('public/image').'/'.json_decode($pro->images,false)[$i]}}" class="img-fluid" alt="car">
                                                                    </picture>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--data for single car 1-->
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="productDeatils text-left text-dark">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">{{$pro->$carName}}</p>
                                                            <p class="text-white product-price mb-0 px-3 py-1">{{$pro->price}}</p>
                                                        </div>
                                                        <p class="overview-info">   {!!str_limit(strip_tags($pro->$overview),150,'...')!!}</p>
                                                        <div class="row justify-content-around align-items-center products-list">
                                                            <ul class="list-unstyled col-sm-6 m-auto">
                                                                <li>{{trans('purchase.year')}} {{trans($pro->Year)}}</li>
                                                                <li>{{trans('purchase.option')}}  {{$pro->$option}}</li>
                                                            </ul>
                                                            <ul class="list-unstyled col-sm-6 m-auto">
                                                                <li>{{trans('purchase.option')}}  {{$pro->$transmission}}</li>
                                                                <li>{{trans('purchase.engine')}} {{$pro->$engine}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <div class="m-auto col-sm-12 d-flex justify-content-center">
                                {{ $data['products']->links() }}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            @foreach ($data['offer'] as $pro)
                                <div class="col-sm-12 my-2">
                                    <div class="single-car-data py-1">
                                        <div class="row align-items-center">
                                            <!--carousal for single car-->
                                            <div class="col-md-6 col-sm-12">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        @for($i=0;$i<count(json_decode($pro->frouts->images,false)) ;$i++)
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="@if($i==0) active  @endif "></li>
                                                        @endfor
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        @for($i=0;$i<count(json_decode($pro->frouts->images,false)) ;$i++)
                                                        <div class="carousel-item  @if ($i == 0)active @endif ">
                                                            <picture>
                                                                <source srcset="{{URL::asset('public/image').'/'.json_decode($pro->frouts->images,false)[$i].'.webp'}}" type="image/webp">
                                                                <source srcset="{{URL::asset('public/image').'/'.json_decode($pro->frouts->images,false)[$i]}}" type="image/png">
                                                                <img src="{{URL::asset('public/image').'/'.json_decode($pro->frouts->images,false)[$i]}}" class="img-fluid" alt="car">
                                                            </picture>
                                                        </div>
                                                        @endfor
                                                    </div>
                                                </div>

                                            </div>
                                            <!--data for single car 1-->
                                            <div class="col-md-6 col-sm-12">
                                                <div class="productDeatils text-left">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="mb-0">{{$pro->frouts->$carName}}</p>
                                                        <p class="product-price mb-0 px-2 py-1">{{$pro->frouts->price}}</p>
                                                    </div>
                                                    <p class="overview-info"> {!! $pro->frouts->$overview!!}</p>
                                                    <div class="d-flex justify-content-around align-items-center products-list">
                                                        <ul class="list-unstyled col-sm-6 m-auto">
                                                            <li>{{trans('purchase.year')}} :{{date('y',strtotime($pro->frouts->Year))}}</li>
                                                            <li>{{trans('purchase.option')}} : {{$pro->frouts->$option}}</li>
                                                        </ul>
                                                        <ul class="list-unstyled col-sm-6 m-auto">
                                                            <li>{{trans('purchase.option')}} : {{$pro->frouts->$transmission}}</li>
                                                            <li>{{trans('purchase.engine')}} :{{$pro->frouts->$engine}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="m-auto">
                                {{ $data['offer']->links() }}
                            </div>
                        </div>
                    </div>
{{--                    <nav aria-label="Page navigation example" class="m-auto">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}

                </div>
            </div>
        </div>
        <div class="col-sm-4 d-none d-md-block single-car py-5 mt-5">
            <div class="filterCars  text-white py-5">
                <div class="container py-5">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-12">
                            <div class="filter-title text-center">
                                <p>{{trans('purchase.search')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2 text-center">
                            <div class="select-option text-white">
                                <select id="brand2" name="" class="py-2 px-3" name="" id="">
                                    <option value="" >Select Car Brand</option>
                                    @foreach($data['brands'] as $brand)
                                        <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class=" col-sm-12 mb-2 text-center">
                            <div class="select-option text-white">
                                <select id="classname" name=""   class="py-2 px-4" name="" id="">
                                    <option value="">Select Car Class</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-2 text-center">
                            <div class="select-option text-white">
                                <select  id="carname" name="" class="py-2 px-4" name="" id="">
                                    <option value="">Select Car </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-2 text-center">
                            <div class="allCars ">
                                <a id='gocar' href='' class="btn text-uppercase py-3 px-5 type1">{{trans('filter.showbtn')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script>
    
        // brand id to class
        $('#brand2').change(function(){
console.log('jjjjjjjjjj')
            var brandId = $(this).children("option:selected").val();
            // alert("You have selected the country - " + selectedCountry);
            console.log(brandId)
            fetch('getBrandClasses/'+brandId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    var data;
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
        //  get cars
        $('#classname').change(function () {

            var classId = $(this).children("option:selected").val();


            fetch('GetCars/'+classId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    console.log('-----------------')

                    console.log(myJson)
                    var data;
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name = myJson[i]['car_name_ar'];
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#carname").append(o);
                      //  $('#gocar').attr('href','{{URL::to("/car-gallery/")}}/'+id)
                    }
                    console.log(myJson);
                });

        });
        $("#carname").change(function(){
            console.log($(this).children("option:selected").val())
            var id=$(this).children("option:selected").val();
            $('#gocar').attr('href','{{URL::to("/car-gallery/")}}/'+id)
        })

    </script>

@endsection
@include('homepage.inc.footr')