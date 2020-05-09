
@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-6 m-t-5 ">
                    <a href="{{route('dsale.create')}}">  <button type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">{{trans('sale.add')}} <i class="fas fa-plus"></i></button></a>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('sale.allsales')}}</h5>
                        <div class="main-card p-5 card">
                                                @if(count($data)>0)
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>{{trans('sale.sale')}}</th>
                                    <th>{{trans('sale.title')}}</th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.edit')}}</th>
                                    <th>{{trans('tables.delete')}}</th>
                                    <th>{{trans('sale.off')}}</th>



                                </tr>
                                </thead>
                                <tbody>

                                @foreach($data as $sale )
                                    @php
                                    //    dd($sale->off);
                                    @endphp
                                    @if($sale->off=== null )
                                    <tr>
                                        <td>{{$sale->id}}</td>

                                        <td>{{$sale->car_id}}</td>

                                        <td>{{$sale->user->name}}</td>
                                        <td>{{$sale->created_at}}</td>
                                        <td><a href="{{route('dsale.edit',[$sale->id])}}" class="btn btn-primary">{{trans('tables.edit')}}</a></td>
                                        <td> <form method="post" action="{{route('dsale.destroy',[$sale->id])}}">@csrf @method('delete') <button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>
                                        <td> <form method="post" action="{{route('dsale.update',[$sale->id])}}">@csrf @method('put')<input name="off" value="1" hidden><button type="submit" class="btn btn-info">{{trans('sale.off')}}</button></form></td>

                                    </tr>

                                    @endif
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{trans('sale.sale')}}</th>
                                    <th>{{trans('sale.title')}}</th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.edit')}}</th>
                                    <th>{{trans('tables.delete')}}</th>
                                    <th>{{trans('sale.off')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                                                @else
                                                    <p class="text-center font-weight-bold">no brands Added</p>
                                                @endif
                        </div>
                    </div>
                </div>

             <!--ended offers-->

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('sale.endedoffers')}}</h5>
                        <div class="main-card p-5 card">
                            @if(count($data)>0)
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>{{trans('sale.sale')}}</th>
                                        <th>{{trans('sale.title')}}</th>
                                        <th>{{trans('tables.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>
                                        <th>{{trans('sale.off')}}</th>



                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $sale )
                                        @if($sale->off =='1')
                                            <tr>
                                                <td>{{$sale->id}}</td>

                                                <td>{{$sale->car_id}}</td>

                                                <td>{{$sale->user->name}}</td>
                                                <td>{{$sale->created_at}}</td>
                                                <td><a href="{{route('dsale.edit',[$sale->id])}}" class="btn btn-primary">{{trans('tables.edit')}}</a></td>
                                                <td> <form method="post" action="{{route('dsale.destroy',[$sale->id])}}">@csrf @method('delete') <button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>
                                                <td> <form method="post" action="{{route('dsale.update',[$sale->id])}}">@csrf @method('put')<input name="off" value="" hidden><button type="submit" class="btn btn-info">{{trans('sale.off')}}</button></form></td>

                                            </tr>

                                        @endif
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>{{trans('sale.sale')}}</th>
                                        <th>{{trans('sale.title')}}</th>
                                        <th>{{trans('tables.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>
                                        <th>{{trans('sale.off')}}</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            @else
                                <p class="text-center font-weight-bold">no brands Added</p>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection