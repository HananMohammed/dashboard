<!-- End Header -->
@include('homepage.inc.header')
@include('homepage.inc.nave')
@php
    $title='title_'.trans('systems.lang');
    $newsD='news_'.trans('systems.lang');
 $slug='slug_'.trans('systems.lang');
@endphp
<section id="content">
    <div class="container">
        <div class="shop-banner banner-adv line-scale zoom-image">
            <a href="#" class="adv-thumb-link">
                <picture>
                    <source srcset="{{URL::asset('css/img/banner-detail.jpg').'.webp'}}" type="image/webp">
                    <source srcset="{{URL::asset('css/img/banner-detail.jpg')}}" type="image/webp">
                    <img src="{{URL::asset('css/img/banner-detail.jpg')}}" alt="" />
                </picture>
                </a>
            <div class="banner-info">
                <h2 class="title30 color">{{trans('news.news')}}</h2>
                <div class="bread-crumb white"><a href="{{route('homepage')}}" class="white">{{trans('webnav.home')}}</a><span>{{trans('news.allnews')}}</span></div>
            </div>
        </div>
        <!-- ENd Banner -->
        <div class="from-blog2">
            <h2 class="color2 title30 text-center title-box2 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">{{trans('news.allnews')}}</h2>
            <div class="row">




                   <div class="col-md-4 col-sm-12 col-xs-12">
                    @foreach($data['hnews']['col4'] as $datan)

                    <div class="item-blog2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="banner-adv zoom-image overlay-image">
                                    <a href="#" class="adv-thumb-link">
                                        <picture>
                                            <source srcset="{{URL::asset('public/news').'/'.json_decode($datan->images,true)[0].'.webp'}}" type="image/webp">
                                            
                                            <source srcset="{{URL::asset('public/news').'/'.json_decode($datan->images,true)[0]}}" type="image/webp">
                                            <img src="{{URL::asset('public/news').'/'.json_decode($datan->images,true)[0]}}" alt="">
                                        </picture>
                                   </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="blog-info2 text-center info-center">
                                    <h2 class="title18"><a href="#" class="black">{{$datan->$title}}</a></h2>
                                    <ul class="list-inline-block post-comment-date">
                                        <li><span class="color"><i class="fa fa-calendar-o"></i> {{date('d-m-Y',strtotime($data['news'][0]->created_at))}}</span></li>

                                    </ul>
                                    <p class="desc">{!! str_limit(strip_tags($data['news'][0]->$newsD ),200,'...')!!}</p>
                                    <a href="{{route('singlnews',[$datan->id,$datan->$slug])}}" class="shop-button">{{trans('news.reedmore')}}</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    @endforeach
                   </div>

                    <div class="col-md-8 col-sm-12 col-xs-12">
                    @foreach($data['hnews']['col8'] as $datan)
                    <div class="item-blog2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="blog-info2 text-left info-left">
                                    <h2 class="title18"><a href="#" class="black">{{$datan->$title}}</a></h2>
                                    <ul class="list-inline-block post-comment-date">
                                        <li><span class="color"><i class="fa fa-calendar-o"></i> {{date('d-m-Y',strtotime($data['news'][0]->created_at))}}</span></li>

                                    </ul>
                                    <p class="desc">{!! str_limit(strip_tags($data['news'][0]->$newsD ),200,'...')!!} </p>
                                    <a href="{{route('singlnews',[$datan->id,$datan->$slug])}}" class="shop-button">{{trans('news.reedmore')}}</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="banner-adv zoom-image overlay-image">
                                    <a href="#" class="adv-thumb-link">
                                         <source srcset="{{URL::asset('public/news').'/'.json_decode($datan->images,true)[0].'.webp'}}" type="image/webp">
                                          <source srcset="{{URL::asset('public/news').'/'.json_decode($datan->images,true)[0]}}" type="image/webp">
                                        <img src="{{URL::asset('public/news').'/'.json_decode($datan->images,true)[0]}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>

            </div>
        </div>
        <!-- End Content Shop -->
    </div>
</section>
@include('homepage.inc.footr')