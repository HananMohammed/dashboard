
@php
    $about='about_'.trans('systems.lang');
    $text='text_'.trans('systems.lang');
    $mission='mission_'.trans('systems.lang');
    $vission='vission_'.trans('systems.lang');
@endphp



<!--start of aboutUs-->
<div id="aboutUs" class="about-us py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div>
                    <ul class="nav nav-tabs about-us-toggle" id="myTab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{trans('about.about')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{{trans('mission.vision')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">{{trans('mission.value')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active mt-4" id="home" role="tabpanel" aria-labelledby="home-tab">{!! str_limit(strip_tags($data['about']->$about),300,'...')!!}</div>
                        <div class="tab-pane fade mt-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">{!! str_limit(strip_tags($data['mission']->$mission),300,'...')!!}</div>
                        <div class="tab-pane fade mt-4" id="contact" role="tabpanel" aria-labelledby="contact-tab">{!!str_limit(strip_tags($data['mission']->$vission),300,'...')!!}</div>
                    </div>
                </div>
                <div class="about-us-btn mt-4">
                    <a href="{{URL::to('about-us')}}" class="btn text-uppercase text-white type1">{{trans('mission.readmore')}}</a>
                </div>
                <div class="social mt-4">
                    <ul class="list-unstyled d-flex justify-content-between my-1 about-social">
                        @foreach($data['social'] as  $social)
                            <li><a href="{{$social->link}}">{!! $social->socailIcon->icon !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <picture>
                        <source  srcset="{{URL::asset('public/images/aboutus/aboutus.webp')}}" type="image/webp">
                        <source  srcset="{{URL::asset('public/images/aboutus/aboutus.png')}}" type="image/png">
                        <img src="{{URL::asset('public/images/aboutus/aboutus.png')}}" class="img-fluid" alt="image">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>



<!--end of aboutUs-->



