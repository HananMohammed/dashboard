@include('homepage.inc.header')
@include('homepage.inc.nave')
@php
    $title='title_'.trans('systems.lang');
    $newsD='news_'.trans('systems.lang');
$name='name_'.trans('systems.lang');
@endphp

<section id="date" style="background-image: url({{URL::asset('css/img/banner1.png')}});">
    <!--for demo wrap-->
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">

                    <div class="choise-title text-center wow zoomIn mb-3 mt-3" style="visibility: visible; animation-name: zoomIn;">
                        <h2 class="title30 paci-font color">{{trans('products.willbe')}}</h2>
                        <h2 class="title30 font-bold text-uppercase white">{{trans('products.sessons')}}</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered tablea  ">

                            <thead class="fixed_headers height-f">
                            <tr>
                                <th class="mr-3">{{trans('month.name')}}</th>
                                <th>{{trans('month.Jan')}}</th>
                                <th>{{trans('month.Feb')}}</th>
                                <th>{{trans('month.Mar')}}</th>
                                <th>{{trans('month.Apr')}} </th>
                                <th>{{trans('month.May')}} </th>
                                <th> {{trans('month.Jun')}}</th>
                                <th>{{trans('month.Jul')}} </th>
                                <th>{{trans('month.Aug')}} </th>
                                <th>{{trans('month.Sep')}} </th>
                                <th>{{trans('month.Oct')}} </th>
                                <th>{{trans('month.Nov')}} </th>
                                <th> {{trans('month.Dec')}}</th>
                            </tr>
                            </thead>


                            <tbody class="">
                            <tr>
                                @foreach($data['products'] as $product)
                                <td scope="row">{{$product->$name}}</td>
                                @for ($i = 1; $i < 13; $i++)
                                        @php $mo='mon_'.$i @endphp
                                        @if($product->$mo!=null)
                                            <td> <img src="{{URL::asset('public/products_icon'.'/'.$product->icon)}}" alt="" class="svg-f"></td>
                                        @else
                                            <td> </td>
                                        @endif


                                    @endfor

                                @endforeach
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


</section>
@include('homepage.inc.footr')