<!--***************************title -description -keyword****************************************-->

<div class="form-group">
    <label for="seo_title_en">{{trans('seo.titleeng')}}</label>
    <textarea type="text"    value=""  name="seo_title_en" id="title_eng" class="form-control">{{$data->seo_title_en}}</textarea>
</div>
<div class="form-group">
    <label for="seo_title_en">{{trans('seo.titlear')}}</label>
    <textarea type="text"     value="" name="seo_title_ar" id="title_ar" class="form-control"> {{$data->seo_title_ar}} </textarea>
</div>
<div class="form-group">
    <label for="seo_description_en">{{trans('seo.desceng')}}</label>
    <textarea type="text"     value="" name="seo_description_en" id="desc_eng" class="form-control" > {{$data->seo_description_en}} </textarea>
</div>
<div class="form-group">
    <label for="seo_description_ar">{{trans('seo.descar')}}</label>
    <textarea type="text"    value="" name="seo_description_ar" id="desc_ar" class="form-control"> {{$data->seo_description_ar}}</textarea>
</div>
<div class="form-group">
    <label for="seo_keyword_en">{{trans('seo.keywordeng')}}</label>
    <textarea type="text"    value="" name="seo_keyword_en" id="keyword_eng" class="form-control"> {{$data->seo_keyword_en}} </textarea>
</div>
<div class="form-group">
    <label for="seo_keyword_ar">{{trans('seo.keywordar')}}</label>
    <textarea type="text"    value=""  name="seo_keyword_ar" id="keyword_ar" class="form-control"> {{$data->seo_keyword_ar}}</textarea>
</div>
<!--***********************end title -description -keyword********************************************-->
