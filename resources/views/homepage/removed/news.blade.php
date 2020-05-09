@php
    $title='title_'.trans('systems.lang');
    $newsD='news_'.trans('systems.lang');
    $slug='slug_'.trans('systems.lang');
$route='singlnews_'.trans('systems.lang');
@endphp
<!--start of blog-->
<section id="blog">
    <div class="container">
        <div class="card-deck">
             @foreach($data['news'] as $news)
                <div  class="card" style="width: 20rem;">
                    <div class="blogImg">
                        <picture>
                            <source srcset="{{URL::asset('public/image').'/'.$news->images.'.webp'}}" type="image/webp">
                            <source srcset="{{URL::asset('public/image').'/'.$news->images}}" type="image/webp">
                           <img src="{{URL::asset('public/image').'/'.$news->images}}" class="img-fluid card-img-top" alt="image">
                        </picture>
                    </div>
                      <div class="card-body text-center">
                       <p class="card-text text-left"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <h5 class="card-title text-uppercase">{{$news->$title}}</h5>
                        <p class="card-text card-text1"> {!! str_limit(strip_tags($news->$newsD),100,'...')!!}</p>
                      </div>
                       <div class="card-footer text-center">
                           <a class="btn btn-primary text-uppercase" href="{{route($route,[$news->id,$news->$slug])}}">{{trans('news.reedmore')}}</a>
                        </div>
                </div>
               @endforeach
        </div>
    </div>

{{--    <nav class=" text-center d-flex justify-content-center" aria-label="Page navigation example">--}}
{{--        <ul class="pagination">--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link py-3 px-4" href="#" aria-label="Previous">--}}
{{--                    <span aria-hidden="true">&laquo;</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="page-item"><a class="page-link py-3 px-4" href="#">1</a></li>--}}
{{--            <li class="page-item"><a class="page-link py-3 px-4" href="#">2</a></li>--}}
{{--            <li class="page-item"><a class="page-link py-3 px-4" href="#">3</a></li>--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link py-3 px-4" href="#" aria-label="Next">--}}
{{--                    <span aria-hidden="true">&raquo;</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
</section>



<!--end of blog-->