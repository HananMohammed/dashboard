

@php
$ad='address_'.trans('systems.lang');
@endphp
<!--start of contact section-->
<section id="contactUs" class="pt-5 pb-1" style="background-image: url('{{URL::asset("public/images/background-contactus.png")}}');background-size: cover; background-attachment: fixed;">
    <div class="container">
        <div class="row no-gutters  text-white justify-content-center bg-white align-items-center">
            <div class="col-md-6 d-none d-md-block">
                <div class="form-img">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <picture>
                                    <source srcset="{{URL::asset('public/images/contact.webp')}}" type="image/webp">
                                    <source srcset="{{URL::asset('public/images/contact.png')}}" type="image/png">
                                    <img src="{{URL::asset('public/images/contact2.png')}}"  class="img-fluid" alt="car">
                                </picture>
                            </div>
                            <div class="carousel-item">
                                <picture>
                                    <source srcset="{{URL::asset('public/images/contact2.webp')}}" type="image/webp">
                                    <source srcset="{{URL::asset('public/images/contact2.png')}}" type="image/png">
                                    <img src="{{URL::asset('public/images/contact2.png')}}"  class="img-fluid" alt="car">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="formData  text-center text-body">
                    <div class="container px-5">
                        <div class="row text-center align-items-center">
                            <div class="col-sm-12">
                                <div class="form-title mt-2">
                                    <h2 class="text-uppercase">{{trans('webnav.contact-1')}}</h2>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <form class="form text-muted text-center mt-2" action="{{route('phpmails')}} " method='post'>
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="{{trans('contactus.placeholder4')}}">
                                        @if($errors->has('name'))
                                            {{dd($errors->get('about_certificates_ar')[0])}}
                                            <span class="error">{{ $errors->get('name')[0] }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone_number" required class="form-control" placeholder="{{trans('contactus.placeholder2')}}">
                                        @if($errors->has('phone_number'))
                                            {{dd($errors->get('about_certificates_ar')[0])}}
                                            <span class="error">{{ $errors->get('name')[0] }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email_address" required class="form-control" placeholder="{{trans('contactus.placeholder3')}}">
                                        @if($errors->has('email_address'))
                                            {{--                                     {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                            <span class="error">{{ $errors->get('name')[0] }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" name="message" required class="form-control" rows="4" placeholder="{{trans('contactus.placeholder1')}}"></textarea>
                                        @if($errors->has('message'))
                                            {{--                                     {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                            <span class="error">{{ $errors->get('name')[0] }}</span>
                                        @endif
                                    </div>
                                    <input class="btn btn-primary text-uppercase px-5 type1"   name="submit" type="submit" value="{{trans('contactus.send')}}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4 text-white justify-content-center align-items-start contact-details ">
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="contact-text d-flex mt-1">
                    <i class="icofont-phone"></i>
                    <div class="contact-text-data">
                        @php
                        //dd($data)
                        @endphp
                        @foreach($data['phone'] as $phone)
                        <p >{{$phone->phone}}</p>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="contact-text d-flex mt-1">
                    <i class="icofont-email"></i>
                    <div class="contact-text-data">
                         <a target="_blank" href="mailto:{{$data['email']->mail}}">{{$data['email']->mail}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="contact-text d-flex mt-1">
                    <i class="icofont-home"></i>
                    <div class="contact-text-data content-text-add">
                        <p>{{$data['address']->$ad}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of contact section-->
