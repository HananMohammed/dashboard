@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                @if(session('msg'))
                                        <div class="col-md-12 m-t-5 ">
                                        <div class="alert alert-success">
                                            {{ session('msg') }}
                                        </div>
                                        </div>
                      @endif

                <div class="col-md-6 m-t-5 ">
                    <a href="{{route('dbrand.create')}}">  <button type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">{{trans('brand.addbrand')}} <i class="fas fa-plus"></i></button></a>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('brand.allbrands')}}</h5>
                        <div class="main-card p-5 card">
                            @if(count($data)>0)
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>{{trans('brand.brand')}}</th>
                                        <th>{{trans('brand.name_en')}}</th>
                                        <th>{{trans('brand.name_ar')}}</th>
                                        <th>{{trans('tables.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $part )
                                        <tr>
                                            <td>{{$part->id}}</td>

                                            <td>{{$part->name_en}}</td>
                                            <td>{{$part->name_ar}}</td>
                                            <td>{{$part->user->name}}</td>
                                            <td>{{$part->created_at}}</td>
                                            <td><a href="{{route('dbrand.edit',[$part->id])}}" class="btn btn-primary">{{trans('tables.edit')}}</a></td>
                                            <td> <form method="post" action="{{route('dbrand.destroy',[$part->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>{{trans('brand.brand')}}</th>
                                        <th>{{trans('brand.title_en')}}</th>
                                        <th>{{trans('brand.title_ar')}}</th>

                                        <th>{{trans('tables.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>
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