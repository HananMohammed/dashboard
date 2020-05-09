@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('forms.government')}}</h5>
                        <div class="main-card p-5 card">
                            @if(count($gov_data)>0)
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead class="thead-dark">
                                    <tr>

                                        <th>{{trans('forms.sector_name')}}</th>
                                         <th>{{trans('forms.email')}} </th>
                                        <th>{{trans('forms.phone')}} </th>
                                        <th> {{trans('forms.Details')}}</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($gov_data as $data)
                                        <tr>
                                            <td>{{$data->sector_name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td><a href="{{route('dgovforms.show',[$data->id])}}" class="btn btn-primary">{{trans('forms.details')}}</a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            @else
                                <p class="text-center font-weight-bold">No individual Forms  Added</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection