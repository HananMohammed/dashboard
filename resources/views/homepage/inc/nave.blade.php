<nav id="nav" class="navbar navbar-expand-sm text-body  fixed-top nav-fixed-top">
    <div class="container">
        <a id="lego" class="navbar-brand" href="{{URL::to('/')}}">
            <div  class="logo">
                <img  src="{{URL::asset('public/images/AC-white(logo).png')}}" class="img-fluid logo1" alt="">
            </div>
        </a>
        <button class="navbar-toggler d-lg-none navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mt-2 ml-auto mt-lg-0 marginNav text-body text-uppercase">
                <li class="nav-item pr-2">
                    <a class="nav-link" href="{{URL::to('/')}}">{{trans('webnav.home')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item  pr-2">
                    <a class="nav-link " href="{{URL::to('/about-us')}}">{{trans('webnav.about')}}</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="{{URL::to('/all-products')}}">{{trans('webnav.cars')}}</a>
                </li>
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/#cars')}}">{{trans('webnav.offers')}}</a>--}}
{{--                </li>--}}
                <li class="nav-item pr-2">
                    <a class="nav-link" href="{{URL::to('/form')}}">{{trans('webnav.purchase')}}</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="{{URL::to('/single-features')}}">{{trans('webnav.features')}}</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="{{URL::to('/#contactUs')}}">{{trans('webnav.contact')}}</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="{{route('lang',[trans('nav.langval')])}}">{{trans('nav.lang')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
