





@include('homepage.inc.header')
<div id='logo2'>
    @include('homepage.inc.nave')
</div>
@php
    $description='short_description_'.trans('systems.lang');
    $newsD='news_'.trans('systems.lang');
    $descr='description_'.trans('systems.lang');
    $name='name_'.trans('systems.lang');
    $newsD='news_'.trans('systems.lang');
    $slug='slug_'.trans('systems.lang');

@endphp

<section id="content">
    <div class="container">
        <div class="shop-banner banner-adv line-scale zoom-image">
            <a href="#" class="adv-thumb-link"><img src="{{URL::asset('css/img/banner-detail.jpg')}}" alt="" /></a>
            <div class="banner-info">
                <h2 class="title30 color">{{trans('products.products')}}</h2>
                <div class="bread-crumb white"><a href="{{route('homepage')}}" class="white">{{trans('webnav.home')}}</a><span>{{trans('products.det')}}</span></div>
            </div>
        </div>
        <!-- ENd Banner -->
        <div class="content-shop">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar-left sidebar-shop">

                        <!-- End Widget -->
                        <div class="widget widget-category">
                            <h2 class="title18 title-widget font-bold">{{trans('products.allproducts')}}</h2>
                            <ul class="list-none wg-list-cat">
                                @foreach($data['products'] as $product)
                                <li><a href="{{route('singelProduct',[trans('products.products'),$product->id,$product->$slug])}}">{{$product->$name}}</a><span class="color">*</span></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- End  -->


                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="product-detail">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-gallery">
                                    <div class="mid">
                                        <img src="{{URL::asset('public/products').'/'.json_decode($dataproduct->images,true)[0]}}" alt=""/>
                                    </div>
                                    <div class="gallery-control">
                                        <div class="carousel"  data-visible="4">
                                            <ul class="list-none">
                                                @php
                                                $i=0;
                                                        @endphp
                                               @foreach(json_decode($dataproduct->images,true) as $image)
                                               <li><a href="#" @if($i==0)class="active" @endif><img src="{{URL::asset('public/products').'/'.$image}}" alt=""/></a></li>
{{--                                                <li><a href="#"><img src="{{URL::asset('public/products').$image}}" alt=""/></a></li>--}}
                                                    @php
                                                        $i++;
                                                    @endphp
                                                @endforeach
                                            </ul>
                                        </div>
                                        <a href="#" class="prev"><i class="icon ion-ios-arrow-thin-left"></i></a>
                                        <a href="#" class="next"><i class="icon ion-ios-arrow-thin-right"></i></a>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info">

                                    <h2 class="title30 font-bold">{{$dataproduct->$name}}</h2>

                                    <div class="product-rate">
                                        <div class="product-rating" style="width:100%"></div>
                                    </div>
                                    <p class="desc">{{$dataproduct->$description}}</p>

                                    <p class="desc info-extra">
                                        <label>Category:</label><a href="#" class="color">Fruits Fresh</a>
                                    </p>

                                    <p class="desc info-extra">
                                        <label>{{trans('contactus.contactwith')}}:</label>
                                        @foreach($data['social'] as $icon)
                                            <a href="{{$icon->link}}" target="_blank" class="float-shadow  social" style="color: grey;font-size: 18px;">{!! $icon->socailIcon->icon !!}</a>
                                        @endforeach

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Detail -->
                    <div class="detail-tabs">
                        <div class="title-tab-detail">
                            <ul class="title-tab1 list-inline-block">
                                <li class="active"><a href="#tab1" class="title14" data-toggle="tab" aria-expanded="true">{{trans('products.det')}}</a></li>
                                <li class=""><a href="#tab2" class="title14" data-toggle="tab" aria-expanded="false">{{trans('products.sessons')}}</a></li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                <div class="detail-descript">
                                    <h2 class="title30 color">{{trans('products.det')}}</h2>
                                    <p class="desc">{{$dataproduct->$descr}}</p></div>
                            </div>
                            <div id="tab2" class="tab-pane">
                                <div class="detail-addition">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td><p class="desc">{{trans('products.productname')}}</p></td>
                                            <td><p class="desc">{{trans('products.sessons')}}</p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="desc">{{$dataproduct->$name}}</p></td>
                                            <td><p class="desc">
                                                    @for ($i = 1; $i < 13; $i++)
                                                        @php $mo='mon_'.$i @endphp
{{--                                                        {{$dataproduct->$mo}}--}}
                                                       @if($dataproduct->$mo!=null)
                                                         {{$i}},
                                                       @endif
                                                    @endfor
                                                </p></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Content Shop -->
    </div>
</section>
@include('homepage.inc.footr')