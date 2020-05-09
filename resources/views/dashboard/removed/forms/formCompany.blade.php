@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('forms.company')}}</h5>
                        <div class="main-card p-5 card">
                            @if(count($company_data)>0)
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead class="thead-dark">
                                    <tr>

                                        <th>{{trans('forms.type')}}</th>
                                        <th>{{trans('forms.company_name')}}</th>
                                        <th>{{trans('forms.company_activity')}} </th>
                                        <th>{{trans('forms.phone')}} </th>
                                        <th> {{trans('forms.Details')}}</th>

                                        {{--                            <th>{{trans('tables.city')}} </th>--}}
                                        {{--                            <th>{{trans('tables.nationality')}} </th>--}}
                                        {{--                            <th>{{trans('tables.text')}} </th>--}}
                                        {{--                            <th>{{trans('tables.car_name')}} </th>--}}
                                        {{--                            <th>{{trans('tables.work_selector')}} </th>--}}
                                        {{--                            <th>{{trans('tables.salary_transferring_bank')}} </th>--}}
                                        {{--                            <th>{{trans('tables.monthly_obligations')}} </th>--}}
                                        {{--                            <th>{{trans('tables.years_of_experience')}} </th>--}}
                                        {{--                            <th>{{trans('tables.monthly_salary')}} </th>--}}
                                        {{--                            <th>{{trans('tables.total_monthly_obligations')}} </th>--}}

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($company_data as $comp_data)
                                        <tr>
                                            <td>{{$comp_data->type}}</td>
                                            <td>{{$comp_data->company_name}}</td>
                                            <td>{{$comp_data->company_activity}}</td>
                                            <td>{{$comp_data->phone_number}}</td>
                                            <td><a href="{{route('dcompanyforms.show',[$comp_data->id])}}" class="btn btn-primary">{{trans('forms.details')}}</a></td>

                                            {{--                                --}}
                                            {{--                                <td>{{$indv_data->city}}</td>--}}
                                            {{--                                --}}
                                            {{--                                            <td>{{$indv_data->nationality}}</td>--}}
                                            {{--                                            <td>{{$indv_data->text}}</td>--}}
                                            {{--                                            <td>{{$indv_data->car_name}}</td>--}}
                                            {{--                                           --}}
                                            {{--                                            <td>{{$indv_data->select_work_selector}}</td>--}}
                                            {{--                                            <td>{{$indv_data->salary_transferring_bank}}</td>--}}
                                            {{--                                            <td>{{$indv_data->select_monthly_obligations}}</td>--}}
                                            {{--                                            <td>{{$indv_data->years_of_experience}}</td>--}}
                                            {{--                                            <td>{{$indv_data->monthly_salary}}</td>--}}
                                            {{--                                            <td>{{$indv_data->total_monthly_obligations}}</td>--}}

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