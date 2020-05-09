 <form method="post" action="{{route('formindividual.store')}}"  class="individual-finance" enctype="multipart/form-data">
        @csrf
        <div class="form-group row align-items-center justify-content-between">
{{--            <label for="company_name">{{trans('form.company_name')}}</label>--}}
            <div class="col-lg-7 mb-4">
                <input type="text" name="name" class="form-control"  placeholder="{{trans('forms.your_name')}}" required>
            </div>
            <div class="col-lg-4 mb-4">
                <input type="text" name="email" class="form-control" placeholder="{{trans('forms.email')}}" >
            </div>


            <div class="col-lg-7 mb-4">
                <input type="text" name="phone_number" class="form-control" placeholder="{{trans('forms.phone')}}" required>
            </div>
            <div class="col-lg-4 mb-4">
                <input type="text" name="city" class="form-control" placeholder="{{trans('forms.city')}}" required>
            </div>

            <div class="col-lg-7 mb-4">
                <input type="text" name="nationality" class="form-control" placeholder="{{trans('forms.nationality')}}" required>
            </div>

            {{--        <input type="text" name="car_id" class="form-control" placeholder="car_id" required>--}}
            {{--        <input type="text" name="commercial_registration_no" class="form-control" placeholder="commercial_registration_no" required>--}}
            <input type="text" name="type" value="finance" class="form-control" placeholder="{{trans('forms.type')}}" hidden>

            @php
                $name='name_'.trans('systems.lang');

            @endphp
            <div class="col-sm-12 filterCars container">
                <div class="row justify-content-between align-items-center w-100 m-auto">
                    <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                        <div class="select-option text-white">
                            <select id="brand4" name="" class="py-2 px-3" name="" id="">
                                <option value="" >Select Car Brand</option>
                                @foreach($data['brands'] as $brand)
                                    <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                        <div class="select-option text-white">
                            <select id="classname4" name=""   class="py-2 px-4" name="" id="">
                                <option value="">Select Car Class</option>
                            </select>
                        </div>
                    </div>

                    <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                        <div class="select-option text-white">
                            <select  id="carname4" name="" class="py-2 px-4" name="" id="">
                                <option value="">Select Car </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-6 mb-2 text-left">
                        <div class="allCars ">
                            <a class="btn text-uppercase added-btn bg-white" id="addbtn4"><i class="icofont-plus"></i></a>

                        </div>
                        <div id="btndone4"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-sm-6 mb-2 text-center">
                <div id="cas4" class="row justify-content-between align-items-center text-center ">
                </div>
            </div>
            <textarea  name="text" class="form-control" placeholder="{{trans('forms.text')}}" required rows="5"></textarea>

            <div class="col-sm-12 mt-4 ">
                <div class="row justify-content-between align-items-center select-gutter">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <select name="select_work_selector" class="form-control" >
                            <option> {{trans('acForms.Ejara_Company')}}</option>
                            <option> {{trans('acForms.raya')}} </option>
                            <option> {{trans('acForms.abdo')}} </option>
                            <option> {{trans('acForms.Oryx')}}</option>
                            <option>{{trans('acForms.tayser')}} </option>
                            <option> {{trans('acForms.Leasing')}} </option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <input type="text" name="years_of_experience" class="form-control" placeholder="{{trans('forms.years_of_experience')}}" >
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <select name="salary_transferring_bank" class="form-control" >
                            <option>{{trans('acForms.Rajhi')}}</option>
                            <option>{{trans('acForms.albilad')}}</option>
                            <option>{{trans('acForms.Ahly')}}</option>
                            <option>{{trans('acForms.Riyadh')}}</option>
                            <option>{{trans('acForms.frincy')}}</option>
                            <option>{{trans('acForms.UAE')}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <input type="text" name="monthly_salary" class="form-control" placeholder="{{trans('forms.monthly_salary')}}" >
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <input type="number" name="select_monthly_obligations" id="select_monthly_obligations" class="form-control" min="20000" value="" placeholder="{{trans('forms.minimum_price')}}">
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <input type="text" name="total_monthly_obligations" class="form-control" placeholder="{{trans('forms.total_monthly_obligations')}}" >
                    </div>
                </div>
            </div>
            <input type="submit"   value="{{trans('form.send')}}" class="btn type1 text-center w-100">
        </div>
    </form>
@section('script4')
    <script>
        var ch=false;
        console.log('kkkkkkkkkkkk')
        // brand id to class
        $('#brand4').change(function(){

            var brandId = $(this).children("option:selected").val();
            // alert("You have selected the country - " + selectedCountry);
            //  console.log(brandId)
            fetch('getBrandClasses/'+brandId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    var data;
                    $("#classname4").html('<option> select class</option>');
                     $("#carname4").html('<option> select car</option>');
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name=myJson[i]['name_en']
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#classname4").append(o);
                    }
                    console.log(myJson);
                });
        });
        //  get cars
        $('#classname4').change(function () {

            var classId = $(this).children("option:selected").val();


            fetch('GetCars/'+classId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    console.log('-----------------')

                    console.log(myJson)
                    var data;
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name = myJson[i]['car_name_en'];
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#carname4").append(o);
                    }
                    console.log(myJson);
                });


        });
        $('#carname4').change(function () {
            var car_id =$(this).children("option:selected").val();
            var car_name=$(this).children("option:selected").text();
            ch = !ch

            $('#addbtn4').click(function () {
                if(ch) {
                    $('#btndone4').append('<input class="'+car_name+'" type="hidden" name="car_id[]" value=' + car_id + '>');
                    $('#btndone4').append('<input  class="'+car_name+'" type="hidden" name="car_name[]" value=' + car_name + '>');
                    var clssss=car_id+car_name;
                    $('#cas4').append('<div class="'+car_name+' form-div col-md-4 col-sm-12" name="'+car_name+'"> <ul class="form-added list-unstyled"></ul> <li style="color: black">'+car_name+'  </li><li > <i onclick="clikedindvfin(this)" id="ah" class="btn btn-danger removecar ml-3 icofont-close-line" remove="'+car_name+'"  class="icofont-close-line btn btn-danger removecar ml-3"></i></li></div>');

                    
                    ch = !ch;
                    // console.log(ch)
                    // console.log(this.checked)
                    $('#addbtn4'). unbind();
                }
            })


        })

        function clikedindvfin(e){
            var attrs=e.getAttribute('remove');

            var clas ='.'+attrs.toString();
console.log('clicked')
            document.querySelectorAll(clas).forEach(function(a){
                
                a.remove()
            })
           
        }
    </script>
@endsection
