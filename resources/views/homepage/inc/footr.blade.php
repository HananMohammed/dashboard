
</section>
@php
    $about='about_'.trans('systems.lang');
    $address='address_'.trans('systems.lang');

@endphp
@php
    $ad='address_'.trans('systems.lang');

@endphp
<!--start of footer-->
<footer class="pt-2">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-md-3 col-sm-6">
                <div class="footerData">
                    <h3 class="mb-1">{{trans('webnav.contact-1')}}</h3>
                    <ul class="list-unstyled">
                        <li> <i class="icofont-phone text-white hide-foot2"></i> <a href="#">{{$data['phone'][0]->phone }}</a> <i class="icofont-phone text-white hide-foot"></i></li>
                        <li> <i class="icofont-email text-white hide-foot2"></i> <a href="mailto:{{$data['email']->mail}}">{{$data['email']->mail}}</a> <i class="icofont-email text-white hide-foot"></i></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="footerData">
                    <h3 class=" mb-1 text-white">{{trans('webnav.quik')}}</h3>
                    <ul class="list-unstyled text-secondary">
                        <li><a href="{{URL::to('/')}}">{{trans('webnav.home')}}</a></li>
                        <li><a href="{{URL::to('/#aboutUs')}}">{{trans('webnav.about')}}</a></li>
                        <li><a href="{{URL::to('/#cars')}}">{{trans('webnav.offers')}}</a></li>
                        <li><a href="{{URL::to('/form')}}">{{trans('webnav.purchase')}}</a></li>
                        <li><a href="{{URL::to('/#contactUs')}}">{{trans('webnav.contact')}}</a></li>
                    </ul>
                </div>
            </div>

            <!--subscribe now-->
            <div class="col-md-4  col-sm-12">
                <div class="footerData text-white">
                    <h4 class="mb-1">{{trans('webnav.Subscribe')}}</h4>
                    <p class="text-secondary">{{trans('webnav.Contrary')}}</p>
                    <form class="d-felx " action="{{route('subscriber.store')}}" method="post">
                        <div class="input-group subscribe-text mb-3 ">
                            @csrf
                            <input type="text" class="form-control border-0" name="mail" placeholder="{{trans('webnav.value1')}}" aria-label="Subscripe" aria-describedby="basic-addon2">

                            <div class="input-group-append send-mail d-flex">
                                <button class="input-group-text text-white btn btn-primary border-0" id="basic-addon2" type="submit">  <i class="icofont-paper-plane"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('homepage.inc.socials',['data'=>$data['social'] ])
</footer>
<!--end of footer-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
{{--<script src="https://cdn.boomcdn.com/libs/wow-js/1.3.0/wow.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{URL::asset('public/js/index.js')}}"></script>
    @if (session()->get('locale')=='ar'||session()->get('locale')==null)
  <script src="{{URL::asset('public/js/indexar.js')}}"></script>
  @endif

  @yield('script')
  @yield('script2')
  @yield('script3')
  @yield('script4')
  @yield('script5')
  @yield('script6')

  {{--  <script>--}}
{{--  var webp = new Image();--}}
{{--webp.onerror = function(){--}}
{{--for( var i=0;i<$('.backwebp').length;i++){--}}
{{--    var url=$('.backwebp')[i].getAttribute('imgscr')--}}
{{--    console.log(url)--}}
{{--   $('.backwebp')[i].style.backgroundImage="url("+url+")";--}}
{{--   }--}}
{{--};--}}
{{--webp.onload = function(){--}}
{{--   console.log($('.backwebp')[0].getAttribute('imgscr'))--}}
{{--   for( var i=0;i<$('.backwebp').length;i++){--}}
{{--    var url=$('.backwebp')[i].getAttribute('imgscr')+'.webp'--}}
{{--    console.log(url)--}}
{{--   $('.backwebp')[i].style.backgroundImage="url("+url+")";--}}
{{--   }--}}
{{--};--}}
{{--webp.src = 'data:image/webp;base64,UklGRjIAAABXRUJQVlA4ICYAAACyAgCdASoBAAEALmk0mk0iIiIiIgBoSygABc6zbAAA/v56QAAAAA==';--}}


{{-- </script>--}}
</body>
</html>