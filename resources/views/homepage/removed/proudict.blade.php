
@php
    $name='name_'.trans('systems.lang');
    $dis='description_'.trans('systems.lang');
    $slug='slug_'.trans('systems.lang');
$route='foo_'.trans('systems.lang');
@endphp
<!--start of products-->
<section id="products">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12 productsTitle text-center text-uppercase mb-4">
                <h1 class="wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.5s">{{trans('products.ourpro')}}</h1>
                <h4 class="mt-4">{{trans('products.task')}} <span>{{trans('products.rowad')}}</span></h4>
            </div>
            @foreach($data['products'] as $prod)
            <div class="col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="1.2s" data-wow-delay="0.5s">
                <div class="productsData">
                    <div class="productsImg">
                        <picture>
                        <source srcset="{{URL::asset('public/image').'/'.$prod->images.'.webp'}}" type="image/webp">
                        <source srcset="{{URL::asset('public/image').'/'.$prod->images}}" type="image/webp">
                          <img src="{{URL::asset('public/image').'/'.$prod->images}}" class="img-fluid" alt="">
                    </picture>
                       </div>
                    <h3 class="my-2">{{$prod->$name}}</h3>
                    <p>{!! str_limit(strip_tags($prod->$dis),100,'...')!!}</p>
                    <a href="#" class="btn btn-primary text-uppercase">{{trans('services.discover')}}</a>
                </div>
            </div>
           @endforeach
            <div class="col-sm-12 text-center mt-5">
                <a href="{{route($route)}}" class="btn btn-primary text-uppercase">{{trans('products.vallpro')}}</a>
            </div>
        </div>
    </div>
</section>
<!--end of products-->