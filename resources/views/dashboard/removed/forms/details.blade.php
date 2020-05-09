@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('forms.individual')}}</h5>
                        <div class="main-card p-5 card">
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead class="thead-dark">

                                   <th>{{trans('forms.name')}}</th>
                                  <th>{{trans('forms.message')}}</th>


                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{trans('forms.type')}}</td>
                                            <td>{{$individual_data->type}}</td>
                                        </tr>
                                        <tr>
                                           <td>{{trans('forms.name')}}</td>
                                            <td>{{$individual_data->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.email')}}</td>
                                            <td>{{$individual_data->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.phone')}}</td>
                                            <td>{{$individual_data->phone_number}}</td>

                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.city')}}</td>
                                            <td>{{$individual_data->city}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.nationality')}}</td>
                                            <td>{{$individual_data->nationality}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.message')}}</td>
                                            <td>{{$individual_data->text}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.car_name')}}</td>
                                            <td>{{$individual_data->car_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.work_selector')}}</td>
                                            <td>{{$individual_data->select_work_selector}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.salary_transferring_bank')}}</td>
                                            <td>{{$individual_data->salary_transferring_bank}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.select_monthly_obligations')}}</td>
                                            <td>{{$individual_data->select_monthly_obligations}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.years_of_experience')}}</td>
                                            <td>{{$individual_data->years_of_experience}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.monthly_salary')}}</td>
                                            <td>{{$individual_data->monthly_salary}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('forms.total_monthly_obligations')}}</td>
                                            <td>{{$individual_data->total_monthly_obligations}}</td>
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