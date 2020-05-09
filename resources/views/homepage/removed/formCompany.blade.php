@section('style')
    <style>
        .navbar {background-color: transparent; transition: all 0.3s ease-in;}
        nav.scrolled {background-color: #fff;}
        nav.scrolled .nav-item a {color:#000;}

        #allForms form input , #formCompany form textarea
        {
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px ;
        }
        textarea {resize: none;}
        .form-img-offers {position: relative;}
        .form-img-overlay
        {
            position: absolute;
            top: 30%;
            left: 0;
            right: 0;
            width: 90%;
            margin: auto;
        }
        .form-img-overlay p:first-child {font-weight: 200; letter-spacing: 2px; font-size: 30px;}
        #allForms .filterCars {background-color: transparent;}
        #allForms  .select-option select option a {color: #000;}
        #addbtn1 i , #addbtn2 i {font-size: 25px; color: #7F7F7F;}
        #allForms .allCars a{width: auto;}
        .form-group.com {margin-bottom: 0;}
        .form-added {list-style-type: armenian; display: flex;}
        .form-added li {display: inline;}
        /*radio buttons*/
        .checked-radio  .new-radio{background-color: #CE0638 ;}

        .inside-finance {margin-right: 20px;}
    </style>
@endsection

@include('homepage.inc.header')
@include('homepage.inc.nave')



<section id="allForms">
    <div class="container">
        <div class="row pb-5 align-items-center">
            <div class="col-sm-12 text-center">
                <h2 class="text-uppercase">{{trans('forms.company')}}</h2>
                <p>{{trans('forms.sure')}}</p>
            </div>
            <div class="col-sm-12 p-0">
                <!--Froms toggle-->
                <nav class="bg-transparent">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-Companies-tab" data-toggle="tab" href="#nav-Companies" role="tab" aria-controls="nav-Companies" aria-selected="true">{{trans('forms.company2')}}</a>
                        <a class="nav-item nav-link " id="nav-individual-tab" data-toggle="tab" href="#nav-individual" role="tab" aria-controls="nav-individual" aria-selected="false">{{trans('forms.individual2')}}</a>
                        <a class="nav-item nav-link " id="nav-government-tab" data-toggle="tab" href="#nav-government" role="tab" aria-controls="nav-government" aria-selected="false">{{trans('forms.government')}}</a>
                    </div>
                </nav>
            </div>
            <div class="form-toggle col-lg-8 col-md-12">
                <!--Forms toggle-->
                <h6 id="transitionText" class="my-2">{{trans('forms.choose')}}</h6>
                <div class="tab-content pad-fix" id="nav-tabContent">
                    <!--Companies-->
                    <div class="tab-pane fade show active" id="nav-Companies" role="tabpanel" aria-labelledby="nav-Companies-tab">
                        <!--Companies Form toggle buttons-->
                        <form>
                            <ul class="nav nav-tabs border-0 mb-3 ml-4" id="myTab" role="tablist">
                                <li class="nav-item mr-4 inside-finance">
                                    <label for="companyFinance-tab">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.801 25.761">
                                            <g id="card" transform="translate(0 25.761) rotate(-90)">
                                                <g id="Group_355" data-name="Group 355" transform="translate(0 8.587)">
                                                    <g id="Group_354" data-name="Group 354">
                                                        <path id="Path_249" data-name="Path 249" d="M15.334,28.214H3.067A3.07,3.07,0,0,1,0,25.148V3.067A3.07,3.07,0,0,1,3.067,0h11.04V1.227H3.067a1.842,1.842,0,0,0-1.84,1.84V25.148a1.842,1.842,0,0,0,1.84,1.84H15.334a1.842,1.842,0,0,0,1.84-1.84V7.36H18.4V25.148A3.07,3.07,0,0,1,15.334,28.214Z" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_357" data-name="Group 357" transform="translate(8.587 0)">
                                                    <g id="Group_356" data-name="Group 356">
                                                        <path id="Path_250" data-name="Path 250" d="M15.7,20.464l-6.017,7.52-.959-.767L14.738,19.7a5.536,5.536,0,0,0,1.21-3.45V1.227H6.974A5.754,5.754,0,0,0,1.227,6.974V9.2H0V6.974A6.982,6.982,0,0,1,6.974,0H16.56a.613.613,0,0,1,.613.613V16.247A6.773,6.773,0,0,1,15.7,20.464Z" transform="translate(0 0)" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_359" data-name="Group 359" transform="translate(7.538 3.105)">
                                                    <g id="Group_358" data-name="Group 358">
                                                        <path id="Path_251" data-name="Path 251" d="M2.887,19.231a1.6,1.6,0,0,0,1.126-.5l8.243-8.759.894.841L4.905,19.568a2.821,2.821,0,0,1-1.984.889A2.785,2.785,0,0,1,.9,19.689l-.062-.06a2.831,2.831,0,0,1-.163-3.841L5.956,9.551v-1.9A8.206,8.206,0,0,1,11.261,0l.431,1.149a6.975,6.975,0,0,0-4.509,6.5V9.775a.616.616,0,0,1-.145.4L1.611,16.58a1.619,1.619,0,0,0,.123,2.212A1.641,1.641,0,0,0,2.887,19.231Z" transform="translate(0 0)" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_361" data-name="Group 361" transform="translate(13.494 20.241)">
                                                    <g id="Group_360" data-name="Group 360" transform="translate(0 0)">
                                                        <rect id="Rectangle_96" data-name="Rectangle 96" width="1.227" height="15.334" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_363" data-name="Group 363" transform="translate(10.427 9.2)">
                                                    <g id="Group_362" data-name="Group 362" transform="translate(0 0)">
                                                        <rect id="Rectangle_97" data-name="Rectangle 97" width="1.227" height="7.36" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_365" data-name="Group 365" transform="translate(10.427 22.694)">
                                                    <g id="Group_364" data-name="Group 364" transform="translate(0 0)">
                                                        <rect id="Rectangle_98" data-name="Rectangle 98" width="1.227" height="13.494" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_367" data-name="Group 367" transform="translate(3.067 25.761)">
                                                    <g id="Group_366" data-name="Group 366">
                                                        <rect id="Rectangle_99" data-name="Rectangle 99" width="1.227" height="7.974" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_369" data-name="Group 369" transform="translate(6.133 28.828)">
                                                    <g id="Group_368" data-name="Group 368">
                                                        <rect id="Rectangle_100" data-name="Rectangle 100" width="1.227" height="4.907" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_371" data-name="Group 371" transform="translate(3.067 11.654)">
                                                    <g id="Group_370" data-name="Group 370" transform="translate(0 0)">
                                                        <path id="Path_252" data-name="Path 252" d="M4.293,4.907H.613A.613.613,0,0,1,0,4.293V.613A.613.613,0,0,1,.613,0h3.68a.613.613,0,0,1,.613.613v3.68A.613.613,0,0,1,4.293,4.907ZM3.68,1.227H1.227V3.68H3.68Z" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="new-radio"></span>
                                    </label>
                                    <input data-toggle="tab" href="#companyFinance" role="tab" aria-controls="companyFinance" aria-selected="true"  class="nav-link active d-inline" type="radio" id="companyFinance-tab" value="option1">
                                    <label class="ml-4" for="companyFinance-tab">{{trans('forms.finance')}}</label>
                                </li>
                                <li class="nav-item inside-finance">
                                    <label for="companyCash-tab">
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 42.034 23.819">
                                            <g id="pay" transform="translate(7 1)">
                                                <path id="Path_257" data-name="Path 257" d="M28.894,5.6,25.136,1.847A6.261,6.261,0,0,0,20.678,0H11.87A3.527,3.527,0,0,0,10.3.37l-1.57.785a2.076,2.076,0,0,1-1.016.22L7.006,1.35V0H0V15.412H7.006v-2.1H8.2l.424.28a7.724,7.724,0,0,0,3.99,1.284v8.944H42.034V5.6ZM5.6,14.011H1.4V1.4H5.6ZM9.4,12.425l-.779-.516H7.006V2.752l.661.024A3.517,3.517,0,0,0,9.36,2.408l1.569-.785A2.106,2.106,0,0,1,11.87,1.4h8.808a4.871,4.871,0,0,1,3.468,1.436L26.913,5.6H21.132l-1.7-1.7-.99.99L23.39,9.844a1.4,1.4,0,0,1-1.983,1.991L17.274,7.7l-.491.42a3.713,3.713,0,0,1-4.722.07l-.406-.329-.883,1.088.41.333a5.107,5.107,0,0,0,1.427.8v3.385A6.318,6.318,0,0,1,9.4,12.425Zm9.966-.656,1.057,1.057a2.823,2.823,0,0,0,3.958,0,3.546,3.546,0,1,0,.4-.508A2.755,2.755,0,0,0,25,9.808h9.381a4.215,4.215,0,0,0,3.445,3.445v2.919a4.215,4.215,0,0,0-3.445,3.445H20.258a4.215,4.215,0,0,0-3.445-3.445V13.252a4.182,4.182,0,0,0,2.548-1.483Zm5.859,2.943a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,25.22,14.712Zm15.413,7.706H14.011V10.381a5.094,5.094,0,0,0,3.153-.806l1.2,1.2a2.8,2.8,0,0,1-2.246,1.138h-.7v5.6h.7a2.8,2.8,0,0,1,2.8,2.8v.7H35.729v-.7a2.8,2.8,0,0,1,2.8-2.8h.7v-5.6h-.7a2.8,2.8,0,0,1-2.8-2.8v-.7H23.934l-1.4-1.4h18.1Zm0,0" transform="translate(-7 -1)" fill="#ce0638"/>
                                            </g>
                                        </svg>
                                        <span class="new-radio"></span>
                                    </label>
                                    <input data-toggle="tab" href="#companyCash" role="tab" aria-controls="companyCash" aria-selected="false" class="nav-link d-inline" type="radio"  id="companyCash-tab">
                                    <label class="ml-4" for="companyCash-tab">{{trans('forms.cash')}}</label>
                                </li>
                            </ul>
                        </form>
                        <!--Companies toggle form-->
                        <div class="tab-content" id="myTabContent">
                            <!--company finance form-->
                            <div class="tab-pane fade show active" id="companyFinance" role="tabpanel" aria-labelledby="companyFinance-tab">
                                <form method="post" action="{{route('formcompany.store')}}"  class="text-white" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row justify-content-between form-group com">
                                        {{--<label for="company_name">{{trans('form.company_name')}}</label>--}}
                                            <div class="col-md-7  col-sm-12 mb-4">
                                                <input type="text" name="company_name" class="form-control"  placeholder="{{trans('forms.company_name')}}" required>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                                                <input type="text" name="city" class="form-control" placeholder="{{trans('forms.city')}}" required>
                                            </div>

                                            <div class="col-md-7 col-sm-12 mb-4">
                                                <input type="text" name="company_activity" class="form-control" placeholder="{{trans('forms.company_activity')}}">
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                                                <input type="text" name="age_of_company" class="form-control" placeholder="{{trans('forms.age_of_company')}}">
                                            </div>

                                            <div class="col-md-7 col-sm-12 mb-4">
                                                <input type="text" name="dealing_banks" class="form-control" placeholder="{{trans('forms.dealing_banks')}}">
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                                                <input type="text" name="responsible_person_name" class="form-control" placeholder="{{trans('forms.responsible_person_name')}}" required>
                                            </div>

                                            <div class="col-md-7 col-sm-12 mb-4">
                                                <input type="text" name="phone_number" class="form-control" placeholder="{{trans('forms.phone')}}" required>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                                                <input type="text" name="email" class="form-control" placeholder="{{trans('forms.email')}}" >
                                            </div>
                                        {{--        <input type="text" name="car_id" class="form-control" placeholder="car_id" required>--}}
                                        {{--        <input type="text" name="commercial_registration_no" class="form-control" placeholder="commercial_registration_no" required>--}}
                                        <input type="text" name="type" value="finance" class="form-control" placeholder="{{trans('forms.type')}}" hidden>
                                        @php
                                            $name='name_'.trans('systems.lang');
                                        @endphp
                                        <div class="filterCars container">
                                            <div class="row justify-content-between align-items-center w-100 m-auto">
                                                <div class="col-sm-6 col-md-3 mb-2 text-center">
                                                    <div class="select-option">
                                                        <select id="brand2" name="" class="p-2" name="" id="">
                                                            <option value="" >Select Car Brand</option>
                                                            @foreach($data['brands'] as $brand)
                                                                <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3  mb-2 text-center">
                                                    <div class="select-option">
                                                        <select id="classname2" name=""   class="p-2" name="" id="">
                                                            <option value="">Select Car Class</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3  mb-2 text-center">
                                                    <div class="select-option">
                                                        <select  id="carname2" name="" class="p-2" name="" id="">
                                                            <option value="">Select Car </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-6 mb-2 text-left">
                                                    <div class="allCars ">
                                                        <a class="btn text-uppercase bg-white added-btn" id="addbtn1"><i class="icofont-plus"></i></a>
                                                    </div>
                                                    <div id="btndone"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <div id="cas" class="row justify-content-between align-items-center text-center"></div>
                                        </div>
                                        <textarea  name="text" class="form-control" placeholder="{{trans('forms.text')}}" required rows="6"></textarea>
                                        <input type="submit"   value="{{trans('form.send')}}" class="btn text-center w-100 mt-2  type1">
                                    </div>
                                </form>
                            </div>
                            <!--company cash form-->
                            <div class="tab-pane fade" id="companyCash" role="tabpanel" aria-labelledby="companyCash-tab">
                                @include('homepage.removed.formCompany_cash')
                            </div>
                        </div>
                    </div>

                    <!--individual-->
                    <div class="tab-pane fade" id="nav-individual" role="tabpanel" aria-labelledby="nav-individual-tab">
                        <!--individual toggle buttons-->
                        <form>
                            <ul class="nav nav-tabs border-0 mb-3 ml-4" id="myTab" role="tablist">
                                <li class="nav-item active mr-4 inside-finance">
                                    <label for="individualFinance-tab">
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 36.801 25.761">
                                            <g id="card" transform="translate(0 25.761) rotate(-90)">
                                                <g id="Group_355" data-name="Group 355" transform="translate(0 8.587)">
                                                    <g id="Group_354" data-name="Group 354">
                                                        <path id="Path_249" data-name="Path 249" d="M15.334,28.214H3.067A3.07,3.07,0,0,1,0,25.148V3.067A3.07,3.07,0,0,1,3.067,0h11.04V1.227H3.067a1.842,1.842,0,0,0-1.84,1.84V25.148a1.842,1.842,0,0,0,1.84,1.84H15.334a1.842,1.842,0,0,0,1.84-1.84V7.36H18.4V25.148A3.07,3.07,0,0,1,15.334,28.214Z" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_357" data-name="Group 357" transform="translate(8.587 0)">
                                                    <g id="Group_356" data-name="Group 356">
                                                        <path id="Path_250" data-name="Path 250" d="M15.7,20.464l-6.017,7.52-.959-.767L14.738,19.7a5.536,5.536,0,0,0,1.21-3.45V1.227H6.974A5.754,5.754,0,0,0,1.227,6.974V9.2H0V6.974A6.982,6.982,0,0,1,6.974,0H16.56a.613.613,0,0,1,.613.613V16.247A6.773,6.773,0,0,1,15.7,20.464Z" transform="translate(0 0)" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_359" data-name="Group 359" transform="translate(7.538 3.105)">
                                                    <g id="Group_358" data-name="Group 358">
                                                        <path id="Path_251" data-name="Path 251" d="M2.887,19.231a1.6,1.6,0,0,0,1.126-.5l8.243-8.759.894.841L4.905,19.568a2.821,2.821,0,0,1-1.984.889A2.785,2.785,0,0,1,.9,19.689l-.062-.06a2.831,2.831,0,0,1-.163-3.841L5.956,9.551v-1.9A8.206,8.206,0,0,1,11.261,0l.431,1.149a6.975,6.975,0,0,0-4.509,6.5V9.775a.616.616,0,0,1-.145.4L1.611,16.58a1.619,1.619,0,0,0,.123,2.212A1.641,1.641,0,0,0,2.887,19.231Z" transform="translate(0 0)" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_361" data-name="Group 361" transform="translate(13.494 20.241)">
                                                    <g id="Group_360" data-name="Group 360" transform="translate(0 0)">
                                                        <rect id="Rectangle_96" data-name="Rectangle 96" width="1.227" height="15.334" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_363" data-name="Group 363" transform="translate(10.427 9.2)">
                                                    <g id="Group_362" data-name="Group 362" transform="translate(0 0)">
                                                        <rect id="Rectangle_97" data-name="Rectangle 97" width="1.227" height="7.36" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_365" data-name="Group 365" transform="translate(10.427 22.694)">
                                                    <g id="Group_364" data-name="Group 364" transform="translate(0 0)">
                                                        <rect id="Rectangle_98" data-name="Rectangle 98" width="1.227" height="13.494" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_367" data-name="Group 367" transform="translate(3.067 25.761)">
                                                    <g id="Group_366" data-name="Group 366">
                                                        <rect id="Rectangle_99" data-name="Rectangle 99" width="1.227" height="7.974" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_369" data-name="Group 369" transform="translate(6.133 28.828)">
                                                    <g id="Group_368" data-name="Group 368">
                                                        <rect id="Rectangle_100" data-name="Rectangle 100" width="1.227" height="4.907" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                                <g id="Group_371" data-name="Group 371" transform="translate(3.067 11.654)">
                                                    <g id="Group_370" data-name="Group 370" transform="translate(0 0)">
                                                        <path id="Path_252" data-name="Path 252" d="M4.293,4.907H.613A.613.613,0,0,1,0,4.293V.613A.613.613,0,0,1,.613,0h3.68a.613.613,0,0,1,.613.613v3.68A.613.613,0,0,1,4.293,4.907ZM3.68,1.227H1.227V3.68H3.68Z" fill="#ce0638"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="new-radio"></span>
                                    </label>
                                    <input type="radio" class="nav-link active" id="individualFinance-tab" data-toggle="tab" href="#individualFinance" role="tab" aria-controls="individualFinance" aria-selected="true">
                                    <label for="individualFinance-tab" class="ml-4">{{trans('forms.finance')}}</label>
                                </li>
                                <li class="nav-item inside-finance">
                                    <label for="individualCash-tab">
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 42.034 23.819">
                                            <g id="pay" transform="translate(7 1)">
                                                <path id="Path_257" data-name="Path 257" d="M28.894,5.6,25.136,1.847A6.261,6.261,0,0,0,20.678,0H11.87A3.527,3.527,0,0,0,10.3.37l-1.57.785a2.076,2.076,0,0,1-1.016.22L7.006,1.35V0H0V15.412H7.006v-2.1H8.2l.424.28a7.724,7.724,0,0,0,3.99,1.284v8.944H42.034V5.6ZM5.6,14.011H1.4V1.4H5.6ZM9.4,12.425l-.779-.516H7.006V2.752l.661.024A3.517,3.517,0,0,0,9.36,2.408l1.569-.785A2.106,2.106,0,0,1,11.87,1.4h8.808a4.871,4.871,0,0,1,3.468,1.436L26.913,5.6H21.132l-1.7-1.7-.99.99L23.39,9.844a1.4,1.4,0,0,1-1.983,1.991L17.274,7.7l-.491.42a3.713,3.713,0,0,1-4.722.07l-.406-.329-.883,1.088.41.333a5.107,5.107,0,0,0,1.427.8v3.385A6.318,6.318,0,0,1,9.4,12.425Zm9.966-.656,1.057,1.057a2.823,2.823,0,0,0,3.958,0,3.546,3.546,0,1,0,.4-.508A2.755,2.755,0,0,0,25,9.808h9.381a4.215,4.215,0,0,0,3.445,3.445v2.919a4.215,4.215,0,0,0-3.445,3.445H20.258a4.215,4.215,0,0,0-3.445-3.445V13.252a4.182,4.182,0,0,0,2.548-1.483Zm5.859,2.943a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,25.22,14.712Zm15.413,7.706H14.011V10.381a5.094,5.094,0,0,0,3.153-.806l1.2,1.2a2.8,2.8,0,0,1-2.246,1.138h-.7v5.6h.7a2.8,2.8,0,0,1,2.8,2.8v.7H35.729v-.7a2.8,2.8,0,0,1,2.8-2.8h.7v-5.6h-.7a2.8,2.8,0,0,1-2.8-2.8v-.7H23.934l-1.4-1.4h18.1Zm0,0" transform="translate(-7 -1)" fill="#ce0638"/>
                                            </g>
                                        </svg>
                                        <span class="new-radio"></span>
                                    </label>
                                    <input type="radio" class="nav-link" id="individualCash-tab" data-toggle="tab" href="#individualCash" role="tab" aria-controls="individualCash" aria-selected="false">
                                    <label for="individualCash-tab" class="ml-4">{{trans('forms.cash')}}</label>
                                </li>
                            </ul>
                        </form>
                        <!--individual toggle FORMS-->
                        <div class="tab-content" id="myTabContent">
                            <!--individual financeFrom tab-->
                            <div class="tab-pane fade show active" id="individualFinance" role="tabpanel" aria-labelledby="individualFinance-tab">
                                @include('homepage.removed.individualForm_finance')
                            </div>
                            <!--individual cashForm tab-->
                            <div class="tab-pane fade " id="individualCash" role="tabpanel" aria-labelledby="individualCash-tab">
                                @include('homepage.removed.individualForm_cash')
                            </div>
                        </div>

                    </div>

                    <!--government-->
                    <div class="tab-pane fade" id="nav-government" role="tabpanel" aria-labelledby="nav-government-tab">
                        @include('homepage.removed.formGovernment')
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-none d-lg-block form-img-offers text-white">
                <div class="row">
                    <div class="col-sm-12 py-3"></div>
                    <div class="col-sm-12">
                        <picture>
                            {{--                    <source srcset="{{URL::asset('public/images/background-contactus.webp')}}" type="image/webp">--}}
                            <source srcset="{{URL::asset('public/images/background-contactus.png')}}" type="image/png">
                            <img src="{{URL::asset('public/images/aboutus/ac-bg.png')}}" alt="car" class="img-fluid hei">
                        </picture>
                        <div class="form-img-overlay text-center ">
                            <p class="mb-2">{{trans('form.check')}}</p>
                            <a href="{{URL::to('/all-products')}}"class="btn text-uppercase type1">{{trans('form.now')}}</a>
                            <p>{{trans('form.exclusive')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('script2')
    <script>
        var ch=false;

        // brand id to class
        $('#brand2').change(function(){

            var brandId = $(this).children("option:selected").val();
            // alert("You have selected the country - " + selectedCountry);
            //  console.log(brandId)
            fetch('getBrandClasses/'+brandId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    var data;
                     $("#classname2").html('<option> select class</option>');
                     $("#carname2").html('<option> select car</option>');
                    for (var i=0;i<myJson.length;i++){
                       // console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name=myJson[i]['name_en']

                        var o = new Option(name, id);

                        //$(o).html("<option> </option>");
                        $("#classname2").append(o);
                    }
                    console.log(myJson);
                });
        });
        //  get cars
        $('#classname2').change(function () {

            var classId = $(this).children("option:selected").val();


            fetch('GetCars/'+classId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    console.log('-----------------')

                    console.log(myJson)
                    var data;
                     $("#carname2").html('<option> select  car</option>');
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name = myJson[i]['car_name_en'];
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#carname2").append(o);
                    }
                    console.log(myJson);
                });


        });
        $('#carname2').change(function () {
                 var car_id =$(this).children("option:selected").val();
                 var car_name=$(this).children("option:selected").text();
                 console.log(car_name)
                 ch = !ch

    $('#addbtn1').click(function () {

        if(ch) {
             console.log(car_name)
        $('#btndone').append('<input class="'+car_name+'" type="hidden" name="car_id[]" value=' + car_id + '>');
         $('#btndone').append('<input  class="'+car_name+'" type="hidden" name="car_name[]" value=' + car_name + '>');
         var clssss=car_id+car_name;
         $('#cas').append('<div class="'+car_name+' form-div col-md-4 col-sm-6"> <ul class="list-untyled form-added"> <li style="color: black">'+car_name+'</li> <li><i class="icofont-close-line btn btn-danger removecar ml-3" onclick="cliked(this)" id="ah" remove="'+car_name+'"></i></li></ul> </div>');


        ch = !ch;
        $('#addbtn1'). unbind();


        }
    })


        })

       function cliked(e){
         var attrs=e.getAttribute('remove');

           var clas ='.'+attrs.toString();

           document.querySelectorAll(clas).forEach(function(a){
               a.remove()
           })
       }
    </script>
@endsection
@include('homepage.inc.footr')
