
@section('style')
    <style>
        .navSmallScreen, .navIcons {
            display: flex !important;
        }
        .brand-logo {padding: 5% 0;}
    </style>
@endsection
@include('homepage.inc.header')
@include('homepage.inc.nave')
<br>
@php
    $title='title_'.trans('systems.lang');
    $newsD='news_'.trans('systems.lang');

    $name='name_'.trans('systems.lang');
    $newsD='news_'.trans('systems.lang');
    $slug='slug_'.trans('systems.lang');

     $dis='description_'.trans('systems.lang');
     @endphp

<!--start of products title-->
<section class="productsTitlepage text-center text-uppercase text-white" style="background-image: url('{{URL::asset('public/images/products-title.png')}}')">
    <div class="productsOverlaypage py-5">
        <h2 class="py-2">{{trans('products.ourpro')}}</h2>
    </div>
</section>
<!--end of products title-->


<!--start of products-->
<section class="container-fluid productsCards py-5" >
    <div class="row">
        <div class="col-lg-3 text-center ">
            <div class="listTitle my-1">
                <h4>{{trans('products.productcategory')}}</h4>
            </div>

            <div class="list-group text-uppercase ">
                <a href="#" class="list-group-item list-group-item-action active">{{trans('products.swimmingfilter')}}</a>
                <a href="#" class="list-group-item list-group-item-action">{{trans('products.swimmingpool')}}</a>
                <a href="#" class="list-group-item list-group-item-action">{{trans('products.maintenance')}}</a>
                <a href="#" class="list-group-item list-group-item-action">{{trans('products.poolspotlight')}}</a>
                <a href="#" class="list-group-item list-group-item-action">{{trans('products.poolcovers')}}</a>
                <a href="#" class="list-group-item list-group-item-action">{{trans('products.poolaccessories')}}</a>
            </div>
            <div class="listBtn">
                <a href="{{route('offer')}}" class="btn btn-warning text-uppercase px-5 mt-4">{{trans('getoffers.getoffer')}}</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-sm-12 text-lg-left text-sm-center">
                        <p>{{count($prod)}} {{trans("products.result")}}</p>
                    </div>
                    @foreach($prod as $prod)
                        <div class="card p-2" style="width: 18rem; height: 25rem;">
                            <picture>
                                <source srcset="{{URL::asset('public/image').'/'.$prod->images.'.webp'}}" type="image/webp">
                                <source srcset="{{URL::asset('public/image').'/'.$prod->images}}" type="image/webp">
                                <img class="card-img-top" src="{{URL::asset('public/image').'/'.$prod->images}}" alt="Card image cap">
                            </picture>

                            <div class="card-body">
                                <p class="card-text">{{$prod->$name}}</p>
                                <p class="card-text"> {!! str_limit(strip_tags($prod->$dis)) !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of products-->

@include('homepage.removed.contactus')


@include('homepage.inc.footr')
