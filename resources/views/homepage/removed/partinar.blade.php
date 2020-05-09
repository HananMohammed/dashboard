<!--start of partner section-->
<section id="partners">
    <div class="partnersTitle text-center text-uppercase py-3" >
        <h1 class="wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.5s">{{trans('partners.our')}}<span>{{trans('partners.partners')}}</span></h1>
    </div>
    <div class="container py-5 partners">
{{--        @php--}}
{{--        dd($data['Partner'])--}}
{{--        @endphp--}}
        <div class="owl-carousel owl-theme m-auto">
            @foreach($data['Partner'] as $part)
            <div class="partnersData item">
                <div class="partnersLogo">
                    <picture>
                        <source srcset="{{URL::asset('public/image').'/'.$part->image_path.'.webp'}}" type="image/webp">
                        <source srcset="{{URL::asset('public/image').'/'.$part->image_path}}" type="image/webp">
                         <img src="{{URL::asset('public/image').'/'.$part->image_path}}" alt="{{$part->title}}" class="img-fluid">
                    </picture>
                   
                   </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--end of partner section-->