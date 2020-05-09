c<!--start of gallery-->
<section id="gallery">
    <div class="galleryPath">
    </div>
    <div class="container mt-5">
        <div class="galleryTitle text-white text-center mb-5 ">
            <h1 class="wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.5s">{{trans('gallary.name')}}</h1>
        </div>

        <div class="owl-carousel owl-theme">
            @foreach($data['gal'] as $gal)
            <div class="item">
                <div class="galleryData">
                    <picture>
                        <source srcset="{{URL::asset('public/image').'/'.$gal->image_path.'.webp'}}" type="image/webp">
                        <source srcset="{{URL::asset('public/image').'/'.$gal->image_path}}" type="image/webp">
                         <img src="{{URL::asset('public/image').'/'.$gal->image_path}}" class="img-fluid" alt="gallery image">
                    </picture>
       
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--end of gallery-->