@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('certificats.certificates')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dcertificates.store') }}"  enctype="multipart/form-data"  >
                                @csrf
                                {{--                                @method('put')--}}
                                <div class="form-group">
                                    <label for="about_certificates_ar">{{trans('certificats.aboutCertificatesAr')}}</label>
                                    <textarea type="text"    name="about_certificates_ar" id="about_certificates_ar" class="form-control"></textarea>
                                    @if($errors->has('about_certificates_ar'))
{{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('about_certificates_ar')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="about_certificates_en">{{trans('certificats.aboutCertificatesEn')}}</label>
                                    <textarea type="text"    name="about_certificates_en" id="about_certificates_en" class="form-control"></textarea>
                                    @if($errors->has('about_certificates_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('about_certificates_en')[0] }}</span>
                                    @endif
                                </div>



                                <div class="form-group" style="margin-top:10px">
                                    <label for="alt_certificates_2">{{trans('certificats.imagesCertificates')}}</label>

                                    <input type="file" name="certificates_1" class="form-control">
                                    @if($errors->has('about_certificates_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('certificates_1')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="alt_certificates_1">{{trans('slider.alt')}}</label>
                                    <input type="text"   name="alt_certificates_1" id="alt_certificates_1" class="form-control">
                                    @if($errors->has('about_certificates_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('alt_certificates_1')[0] }}</span>
                                    @endif
                                </div>

                                <div class="form-group" style="margin-top:10px">
                                    <label for="alt_certificates_2">{{trans('certificats.imagesCertificates')}}</label>
                                    <input type="file" name="certificates_2" class="form-control">
                                    @if($errors->has('about_certificates_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('certificates_2')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="alt_certificates_2">{{trans('slider.alt')}}</label>
                                    <input type="text"   name="alt_certificates_2" id="alt_certificates_2" class="form-control">
                                    @if($errors->has('about_certificates_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('alt_certificates_2')[0] }}</span>
                                    @endif
                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('certificats.addCertificates')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
