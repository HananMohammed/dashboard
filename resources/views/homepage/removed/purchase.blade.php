@php
    $title='title_'.trans('systems.lang');
    $description='des_'.trans('systems.lang');
    $route='s_'.trans('systems.lang');
    $carName='car_name_'.trans('systems.lang');
    $option='Option_'.trans('systems.lang');
    $transmission='Transmission_'.trans('systems.lang');
    $engine='Engine_'.trans('systems.lang');
@endphp


<section id="cars" class="container products">
    <div class="">
        <div class="productTitle my-3">
            <h3>{{trans('purchase.purchase')}}</h3>
        </div>
        <div class="navgation">
            <ul class="list-unstyled productList mb-5">
                <li id="" class="allCars active"><a>{{trans('purchase.cars')}}</a></li>
                <li id="" class="carOffers"><a>{{trans('purchase.offers')}}</a></li>
            </ul>
        </div>

        <div class="row justify-content-center">


        <!--product-->
{{--            @foreach ($data['products'] as $pro)--}}
{{--                @php--}}
{{--                    dd($data)--}}
{{--                @endphp--}}
                @foreach($data['products'] as $pro)
                    <div class="col-lg-4 col-sm-6 cars">
                        <a id="{{$pro->id}}" href="{{URL::to('car-gallery/').'/'.$pro->id}}">
                            <div class="productData">
                                <div class="productImage">
                                    <img src="{{URL::asset('public/image').'/'.json_decode($pro->images,false)[0]}}" class="img-fluid" alt="car">
                                </div>
                                <div class="priceOverlay">{{$pro->price}}</div>
                                <div class="productDeatils text-center">
                                    <ul class="list-unstyled">
                                        <li><a href="#">{{date('y',strtotime($pro->Year))}}</a></li>
                                        <li><a href="#">{!!str_limit(strip_tags($pro->$carName),10,'..')!!}</a></li>
                                        <li><a href="#">{{$pro->$option}}</a></li>
                                        <li><a href="#">{{$pro->$transmission}}</a></li>
                                        <li><a href="#">{{$pro->$engine}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            <!--offers-->
                @foreach($data['offer'] as $pro)
                    <div class="col-lg-4 col-sm-6 offers">
                        <a id="{{$pro->frouts->id}}" href="{{URL::to('car-gallery/').'/'.$pro->frouts->id}}">
                            <div class="productData">
                                <div class="productImage">
                                    <img src="{{URL::asset('public/image').'/'.json_decode($pro->frouts->images,false)[0]}}" class="img-fluid" alt="car">
                                </div>
                                <div class="offerOverlay">{{trans('purchase.offers')}}</div>
                                <div class="priceOverlay">{{$pro->frouts->price}}</div>
                                <div class="productDeatils text-center">
                                    <ul class="list-unstyled">
                                        <li><a href="#">{{date('y',strtotime($pro->frouts->Year))}}</a></li>
                                        <li><a href="#">{!!str_limit(strip_tags($pro->frouts->$carName),10,'..')!!}</a></li>
                                        <li><a href="#">{{$pro->frouts->$option}}</a></li>
                                        <li><a href="#">{{$pro->frouts->$transmission}}</a></li>
                                        <li><a href="#">{{$pro->frouts->$engine}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
        </div>
        <div class="view-products-btn text-center my-3">
            <a class="type1 btn px-4 py-2  text-center- m-auto" href="{{URL::to('all-products')}}">{{trans('purchase.view')}}</a>
        </div>
    </div>
</section>