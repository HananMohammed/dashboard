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
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead class="thead-dark">

                                <th>{{trans('forms.name')}}</th>
                                <th>{{trans('forms.message')}}</th>


                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{trans('forms.type')}}</td>
                                    <td>{{$company_data->type}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.company_name')}}</td>
                                    <td>{{$company_data->company_name}}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('forms.phone')}}</td>
                                    <td>{{$company_data->phone_number}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.city')}}</td>
                                    <td>{{$company_data->city}}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('forms.car_name')}}</td>
                                    <td>{{$company_data->car_name}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.responsible_person_name')}}</td>
                                    <td>{{$company_data->responsible_person_name}}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('forms.text')}}</td>
                                    <td>{{$company_data->text}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.commercial_registration_no')}}</td>
                                    <td>{{$company_data->commercial_registration_no}}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('forms.email')}}</td>
                                    <td>{{$company_data->email}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.company_activity')}}</td>
                                    <td>{{$company_data->company_activity}}</td>
                                </tr>
                                <tr>
                                    <td>{{trans('forms.dealing_banks')}}</td>
                                    <td>{{$company_data->dealing_banks}}</td>

                                </tr>
                                <tr>
                                    <td>{{trans('forms.age_of_company')}}</td>
                                    <td>{{$company_data->age_of_company}}</td>
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