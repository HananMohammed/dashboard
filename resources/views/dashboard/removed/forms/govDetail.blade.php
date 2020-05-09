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
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead class="thead-dark">

                                <th>{{trans('forms.name')}}</th>
                                <th>{{trans('forms.message')}}</th>


                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{trans('forms.sector_name')}}</td>
                                    <td>{{$gov_data->sector_name}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.person_name')}}</td>
                                    <td>{{$gov_data->person_name}}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('forms.email')}}</td>
                                    <td>{{$gov_data->email}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.city')}}</td>
                                    <td>{{$gov_data->city}}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('forms.phone')}}</td>
                                    <td>{{$gov_data->phone}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.car_name')}}</td>
                                    <td>{{$gov_data->car_name}}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('forms.text')}}</td>
                                    <td>{{$gov_data->text}}</td>
                                </tr>

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection