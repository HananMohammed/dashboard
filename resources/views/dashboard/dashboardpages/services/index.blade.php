@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-6 m-t-5 ">
                    <a href="{{route('dservices.create')}}">  <button type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">{{trans('services.create')}} <i class="fas fa-plus"></i></button></a>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('services.all')}}</h5>
                        <div class="main-card p-5 card">
                            @if(count($data)>0)
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>{{trans('partners.partners')}}</th>
                                        <th>{{trans('partners.title')}}</th>
                                        <th>{{trans('tables.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $services )
                                        <tr>
                                            <td>{{$services->id}}</td>

                                            <td>{{$services->title_en}}</td>

                                            <td>{{$services->user->name}}</td>
                                            <td>{{$services->created_at}}</td>
                                            <td><a href="{{route('dservices.edit',[$services->id])}}" class="btn btn-primary">{{trans('tables.edit')}}</a></td>
                                            <td> <form method="post" action="{{route('dservices.destroy',[$services->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>{{trans('partners.partners')}}</th>
                                        <th>{{trans('partners.title')}}</th>
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