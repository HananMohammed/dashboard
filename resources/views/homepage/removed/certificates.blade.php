@php
    $about='about_certificates_'.trans('systems.lang');

@endphp

<div class="container" id="certificates">
    <div class="box-brand2 row">
        <div class="col-md-12 col-sm-12">
            <h2 class="color2 title30 text-center title-box2" style="margin-top: 4%;">{{trans('certificats.certificates')}}</h2>
        </div>
        <div class="list-brand2">
            <div class="col-md-3 col-sm-4 col-xs-6 ">

                <div class="item-brand2"><a href="#" class="border">
                        <img class=" wobble-horizontal" src="{{'public/certificates/'.$data['certificates'][0]->certificates_1}}" alt="{{$data['certificates'][0]->alt_certificates_1}}"
                             width="100%" /></a></div>

            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">

                <div class="item-brand2"><a href="#" class="border">
                        <img class=" wobble-horizontal" src="{{'public/certificates/'.$data['certificates'][0]->certificates_2}}" alt="{{$data['certificates'][0]->alt_certificates_2}}"  width="100%" /></a></div>

            </div>

        </div>
        <div class="col-md-6 col-sm-12">
            <div class="footer-box2">
                <h2 class="title18 font-bold color">{{trans('certificats.aboutCertificates')}}</h2>
                <p class="">
                    {{$data['certificates'][0]->$about}}
                </p>

            </div>
        </div>

    </div>
</div>
