@section('style')
    <style>
        .navSmallScreen, .navIcons {
            display: flex !important;
        }

    </style>
@endsection
@include('homepage.inc.header')
@include('homepage.inc.nave')
@php
    $title='title_'.trans('systems.lang');
    $newsD='news_'.trans('systems.lang');
@endphp
<!--start of products title-->
<section class="singleServices text-center text-uppercase text-white" style="background-image:
        url('{{URL::asset("public/images/servicebackground.jpg")}}');">
    <div class="singleServicesOverlay">
        <h2 class="py-2 text-uppercase">{{trans('services.stitlepage')}}</h2>
        <p class="">{{trans('services.suptitlepage')}}</p>
    </div>
</section>
<!--end of products title-->

<!--start of products-->
<section class="container-fluid singleServicesData py-5">
    <div class="row">
        {{--        <div class="col-lg-3 text-center ">--}}
        {{--            <div class=" my-2">--}}
        {{--                <h4>Products Categorires</h4>--}}
        {{--            </div>--}}
        {{--            <div class="list-group text-uppercase ">--}}
        {{--                <a href="#" class="list-group-item list-group-item-action active">Swimming Pool Filters</a>--}}
        {{--                <a href="#" class="list-group-item list-group-item-action">Swimming Pool</a>--}}
        {{--                <a href="#" class="list-group-item list-group-item-action">maintenance pool</a>--}}
        {{--                <a href="#" class="list-group-item list-group-item-action">Pool spotlight</a>--}}
        {{--                <a href="#" class="list-group-item list-group-item-action">Pool covers</a>--}}
        {{--                <a href="#" class="list-group-item list-group-item-action">Pool accessories</a>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="col-lg-8 m-auto">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-sm-12 text-lg-left text-sm-center my-2">
                        <p>{{$datasingel->$title}}</p>
                        <p>{!! $datasingel->$newsD !!}</p>
                    </div>
                </div>
                <div class="listBtn text-left col-sm-12">
                    <a href="#" class="btn btn-warning text-uppercase px-5 mt-4">{{trans('services.get')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content -->
@include('homepage.inc.footr')