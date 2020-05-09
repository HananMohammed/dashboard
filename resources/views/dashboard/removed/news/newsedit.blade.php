
@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('news.addnews')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dnews.store') }}" enctype="multipart/form-data" >
                                @csrf

                                <div class="form-group">
                                    <label for="title_en">{{trans('news.title_en')}}</label>
                                    <input type="text"   name="title_en" id="title_en" class="form-control">
                                    @if($errors->has('title_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('title_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="title_ar">{{trans('news.title_ar')}}</label>
                                    <input type="text"   name="title_ar" id="title_ar" class="form-control">
                                    @if($errors->has('title_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('title_ar')[0] }}</span>
                                    @endif
                                 </div>
                                <div class="form-group">
                                    <label for="news_en">{{trans('news.description_en')}}</label>
                                    <textarea type="text"   name="news_en" id="news_en" class="form-control"></textarea>
                                    @if($errors->has('news_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('news_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="news_ar">{{trans('news.description_ar')}}</label>
                                    <textarea type="text"   name="news_ar" id="news_ar" class="form-control"></textarea>
                                    @if($errors->has('news_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('news_ar')[0] }}</span>
                                    @endif
                                </div>
                                <div class="input-group form-group control-group increment" >
                                <input type="file" id="imagename" name="images" class="form-control">

{{--                                <div class="input-group-btn">--}}
{{--                                    <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>--}}
{{--                                </div>--}}
                                    @if($errors->has('images'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                    @endif
                        </div>

{{--                        <div class="clone hide">--}}
{{--                            <div class="control-group input-group" style="margin-top:10px">--}}
{{--                                <input type="file" name="images[]" class="form-control">--}}
{{--                                <div class="input-group-btn">--}}
{{--                                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>--}}
{{--                                </div>--}}
{{--                                @if($errors->has('images'))--}}
{{--                                    --}}{{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
{{--                                    <span class="error">{{ $errors->get('images')[0] }}</span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
                                <div class="form-group">
                                    <label for="alt">{{trans('news.alt')}}</label>
                                    <input type="text"   name="alt" id="alt" class="form-control">
                                    @if($errors->has('alt'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('alt')[0] }}</span>
                                    @endif
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="slug_en">{{trans('news.slug_en')}}</label>
                                    <input type="text"   name="slug_en" id="slug_en" class="form-control">
                                    @if($errors->has('slug_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('slug_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="slug_ar">{{trans('news.slug_ar')}}</label>
                                    <input type="text"   name="slug_ar" id="slug_ar" class="form-control">
                                    @if($errors->has('slug_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('slug_ar')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <!--***************************title -description -keyword****************************************-->
                                    <div class="form-group">
                                        <label for="title_eng">{{trans('seo.titleeng')}}</label>
                                        <textarea type="text"    name="seo_title_en" id="title_eng" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="title_ar">{{trans('seo.titlear')}}</label>
                                        <textarea type="text"    name="seo_title_ar" id="title_ar" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description_eng	">{{trans('seo.desceng')}}</label>
                                        <textarea type="text"    name="seo_description_en" id="desc_eng" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description_ar">{{trans('seo.descar')}}</label>
                                        <textarea type="text"    name="seo_description_ar" id="desc_ar" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword_en">{{trans('seo.keywordeng')}}</label>
                                        <textarea type="text"    name="keyword_en" id="keyword_en" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword_ar">{{trans('seo.keywordar')}}</label>
                                        <textarea type="text"    name="keyword_ar" id="keyword_ar" class="form-control"></textarea>
                                    </div>
                                    <!--***********************end title -description -keyword********************************************-->

                                    <div class="form-group">
                                        <label for="script_head">{{trans('seo.scripthead')}}</label>
                                        <textarea type="text"    name="script_head" id="script_head" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="script_footer">{{trans('seo.scriptfooter')}}</label>
                                        <textarea type="text"    name="script_footer" id="script_footer" class="form-control"></textarea>
                                    </div>


                                    <br>
                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('news.addnews')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection