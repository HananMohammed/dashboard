
<div class="col-sm-12 footerRights text-white">
    <div class="">
        <div class="row align-items-center ">
            <div class="col-sm-6 d-block d-md-none">
                <div class="social">
                    <ul class="list-unstyled d-flex justify-content-between my-1">
                        @foreach($data as  $social)
                            <li><a href="{{$social->link}}">{!! $social->socailIcon->icon !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <p class="m-0">&copy;2020 ALL RIGHTS RESERVED    <span class="text-uppercase">attractive car</span></p>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div>
                    <p class="m-0">&copy;  designed by  <span class="text-uppercase"><a style='color:#2680EB' href='https://www.akwanmedia.com/'>akwan media</a></span></p>
                </div>
            </div>
            <div class="col-sm-4 d-none d-md-block">
                <div class="social">
                    <ul class="list-unstyled d-flex justify-content-between my-1">
                        @foreach($data as  $social)

                            <li><a href="{{$social->link}}">{!! $social->socailIcon->icon !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>