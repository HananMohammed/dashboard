
@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('news.newsupdate')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dnews.update',[$record->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="title_en">{{trans('news.title_en')}}</label>
                                    <input type="text"  value="{{$record->title_en}}"  name="title_en" id="title_en" class="form-control">
                                    @if($errors->has('title_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('title_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="title_ar">{{trans('news.title_ar')}}</label>
                                    <input type="text" value="{{$record->title_ar}}"  name="title_ar" id="title_ar" class="form-control">
                                    @if($errors->has('title_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('title_ar')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="news_en">{{trans('news.description_en')}}</label>
                                    <textarea type="text"   name="news_en" id="news_en" class="form-control">{{$record->news_en}} </textarea>
                                    @if($errors->has('news_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('news_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="news_ar">{{trans('news.description_ar')}}</label>
                                    <textarea type="text"   name="news_ar" id="news_ar" class="form-control">{{$record->news_ar}}</textarea>
                                    @if($errors->has('news_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('news_ar')[0] }}</span>
                                    @endif
                                </div>
                                <div class="input-group form-group control-group increment" >
                                    <input type="file" id="imagename" name="images" class="form-control">

{{--                                    <div class="input-group-btn">--}}
{{--                                        <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>--}}
{{--                                    </div>--}}
                                    @if($errors->has('images'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                    @endif
                                </div>

{{--                                <div class="clone hide">--}}
{{--                                    <div class="control-group input-group" style="margin-top:10px">--}}
{{--                                        <input type="file" name="images[]" class="form-control">--}}
{{--                                        <div class="input-group-btn">--}}
{{--                                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>--}}
{{--                                        </div>--}}
{{--                                        @if($errors->has('images'))--}}
{{--                                            --}}{{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
{{--                                            <span class="error">{{ $errors->get('images')[0] }}</span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label for="alt">{{trans('news.alt')}}</label>
                                    <input type="text" value="{{$record->alt}}"  name="alt" id="alt" class="form-control">
                                    @if($errors->has('alt'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('alt')[0] }}</span>
                                    @endif
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="slug_en">{{trans('news.slug_en')}}</label>
                                    <input type="text" value="{{$record->slug_en}}"   name="slug_en" id="slug_en" class="form-control">
                                    @if($errors->has('slug_en'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('slug_en')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="slug_ar">{{trans('news.slug_ar')}}</label>
                                    <input type="text" value="{{$record->slug_ar}}"   name="slug_ar" id="slug_ar" class="form-control">
                                    @if($errors->has('slug_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('slug_ar')[0] }}</span>
                                    @endif
                                </div>

                                <!--------------------------hello Seo ----------------------------------->
                                <div class="form-group">
                                    <label for="seo_title_en">{{trans('seo.titleeng')}}</label>
                                    <input type="text" value="{{$record->seo_title_en}}"   name="seo_title_en" id="seo_title_en" class="form-control">
                                    @if($errors->has('titleeng'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('titleeng')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="seo_title_ar">{{trans('seo.titlear')}}</label>
                                    <input type="text" value="{{$record->seo_title_ar}}"   name="seo_title_ar" id="seo_title_ar" class="form-control">
                                    @if($errors->has('titlear'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('titlear')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="seo_description_en">{{trans('seo.desceng')}}</label>
                                    <input type="text" value="{{$record->seo_description_en}}"   name="seo_description_en" id="seo_description_en" class="form-control">
                                    @if($errors->has('desceng'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('desceng')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="seo_description_ar">{{trans('seo.descar')}}</label>
                                    <input type="text" value="{{$record->seo_description_ar}}"   name="seo_description_ar" id="seo_description_ar" class="form-control">
                                    @if($errors->has('descar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('descar')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="keyword_en">{{trans('seo.keywordeng')}}</label>
                                    <input type="text" value="{{$record->keyword_en}}"   name="keyword_en" id="keyword_en" class="form-control">
                                    @if($errors->has('keywordeng'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('keywordeng')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="keyword_ar">{{trans('seo.keywordar')}}</label>
                                    <input type="text" value="{{$record->keyword_ar}}"   name="keyword_ar" id="keyword_ar" class="form-control">
                                    @if($errors->has('keywordar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('keywordar')[0] }}</span>
                                    @endif
                                </div>

                                <br>
                                <button class="btn btn-success" type="submit">{{trans('news.newsupdate')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection