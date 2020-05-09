@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-6 m-t-5 ">
                    <a href="{{route('dproducts.create')}}">  <button type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">{{trans('products.addproducts')}} <i class="fas fa-plus"></i></button></a>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('products.allproducts')}}</h5>
                        <div class="main-card p-5 card">
                            {{--                    @if(count($barnds)>0)--}}
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>{{trans('products.products')}}</th>
                                    <th>{{trans('products.carname_en')}}</th>
                                    <th>{{trans('products.carname_ar')}}</th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.edit')}}</th>
                                    <th>{{trans('tables.delete')}}</th>


                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $title='name_'.trans('systems.lang');
                                //dd($productsArray);
                                @endphp
                                @foreach($productsArray as $product )
                                    <tr>
                                        <td>{{$product->id}}</td>

                                        <td>{{$product->car_name_en}}</td>
                                        <td>{{$product->car_name_ar}}</td>

                                        <td>{{$product->user->name}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td><a href="{{route('dproducts.edit',[$product->id])}}" class="btn btn-primary">{{trans('tables.edit')}}</a></td>
                                        <td> <form method="post" action="{{route('dproducts.destroy',[$product->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{trans('products.products')}}</th>
                                    <th>{{trans('products.carname_en')}}</th>
                                    <th>{{trans('products.carname_ar')}}</th>

                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.edit')}}</th>
                                    <th>{{trans('tables.delete')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{--                    @else--}}
                            {{--                        <p class="text-center font-weight-bold">no brands Added</p>--}}
                            {{--                    @endif--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection