

@section('style')
    <style>
        .navSmallScreen, .navIcons {
            display: flex !important;
        }

    </style>
@endsection
@include('homepage.inc.header')
@include('homepage.inc.nave')
<!--start of offers section-->
<section id="offerForm" style="background-image: url('{{URL::asset('public/images/backgroung.png ')}}') ;background-size:cover;">
    <div class="formOverlay">
        <div id="section" ></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="offerTitle text-center mb-1 text-center mx-auto">
                        <h1 class="text-uppercase"> {{trans('form.getoffer1')}}</h1>
                        <p>{{trans('form.getoffer2')}} <span>{{trans('form.rowad')}}</span></p>
                    </div>
                </div>
                <form method="post" action="{{route('sendmail')}}"  class="text-white col-lg-7 col-sm-12" enctype="multipart/form-data">
                    @csrf

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">{{trans('form.fname')}}</label>
                                    <input type="text" name="fName" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">{{trans('form.lname')}}</label>
                                    <input type="text" name="lName" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">{{trans('form.phone')}}</label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">{{trans('form.reg')}}</label>
                                    <select   name="region" class="form-control" required>

                                    <option>{{trans('form.Al-kharj')}}</option>
                                    <option> {{trans('form.Al-zulfi')}}</option>
                                    <option> {{trans('form.Al-Qassim')}}</option>
                                    <option>{{trans('form.Riyadh')}} </option>
                                    <option>  {{trans('form.AlMajmaah')}}</option>
                                    <option>{{trans('form.Hafar')}}</option>
                                    <option> {{trans('form.Dammam')}}</option>
                                    <option>  {{trans('form.Khobar')}} </option>
                                    <option>{{trans('form.Qatif')}} </option>
                                    <option>{{trans('form.Dhahran')}}</option>
                                    <option> {{trans('form.Jubail')}}</option>
                                    <option> {{trans('form.Al-Ahsa')}} </option>
                                    <option> {{trans('form.Abqaiq')}} </option>
                                    <option> {{trans('form.Al-Muzahmiyya')}}</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">{{trans('form.email')}}</label>

                                    <input type="text" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">{{trans('form.services')}}</label>
                                    <select   name="choose_service" class="form-control" required>

                                        <option>{{trans('form.serviceBuild')}}</option>
                                        <option> {{trans('form.serviceswim')}}</option>
                                        <option> {{trans('form.servicejac')}}</option>
                                        <option>{{trans('form.servicesa')}} </option>
                                        <option>  {{trans('form.servicewater')}}</option>
                                        <option>{{trans('form.servicepool')}}</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">{{trans('form.pool')}}</label>
                                    <select   name="region" class="form-control" required>
                                        <option> {{trans('form.ski')}} </option>
                                        <option> {{trans('form.over')}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-1 col-lg-2 col-md-2  offset-md-2 offset-sm-0 col-xs-offset-0" >
                                <div class="form-group">
                                    <label for="">{{trans('form.length')}}</label>
                                    <div class="input-group mb-3">
                                <input   type="number" name="length" required class="form-control inputNum" id="inputGroupSelect01" style="width:100px !important;"/>


                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1  col-lg-2 col-md-2  inputNum">
                                <div class="form-group">
                                    <label for="">{{trans('form.width')}}</label>
                                    <div class="input-group mb-3">
                                     <input id="width" type="number" name="width"  required class="form-control inputNum" id="inputGroupSelect01" style="width:100px !important;"/>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1  col-lg-2 col-md-2  ">
                                <div class="form-group">
                                    <label for="">{{trans('form.height')}}</label>
                                    <div class="input-group mb-3">
                                        <input id="length" name="height" type="number"  required class="form-control inputNum" id="inputGroupSelect01" style="width:100px !important;" />

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 text-center m-auto">
                                <div class="form-group">
                                    <label for=""> {{trans('form.uploaddata')}}</label>
                                    <div class="input-group mb-3">
                                        <input type="file"  name="file" class="form-control"  placeholder="{{trans('form.placeholder1')}}" aria-label="upload file" aria-describedby="basic-addon2">
{{--                                        <div class="input-group-append">--}}
{{--                                            <a class="input-group-text subscripe text-white btn btn-primary" id="basic-addon2">{{trans('form.upload')}}</a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">{{trans('form.note')}}</label>
                                    <textarea name="text" id="" cols="30" rows="5" class="form-control" placeholder="{{trans('form.placeholder2')}}"></textarea>
                                </div>
                            </div>
<input type="submit"   name="submit" value="{{trans('form.send')}}" class="btn btn-primary text-center m-auto">
                        </div>
                    </div>

                 </form>
                <div class="col-md-4 offset-md-1 col-xs-offset-0 offset-sm-0  formImg text-center " >
                      <picture>
                                <source srcset="{{URL::asset('public/images/Layer1.png').'.webp'}}" type="image/webp">
                                <source srcset="{{URL::asset('public/images/Layer1.png')}}" type="image/webp">
                               <img src="{{URL::asset('public/images/Layer1.png')}}" width="578" height="729" alt="">
                            </picture>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of offers section-->

@include('homepage.inc.footr')