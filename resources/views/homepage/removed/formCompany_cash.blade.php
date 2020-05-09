
@Section('style')
    <style>
        .form-added {list-style-type: armenian; display: flex;}
        .form-added li {display: inline;}
    </style>
@endsection



    <form id="formCompany1" method="post" action="{{route('formcompany.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between form-group">
            <div class="col-lg-7 mb-4">
                <input type="text" name="company_name" class="form-control"  placeholder="{{trans('forms.company_name')}}" required>
            </div>
            <div class="col-lg-4 mb-4">
                <input type="text" name="commercial_registration_no" class="form-control" placeholder="{{trans('forms.commercial_registration_no')}}" required>
            </div>


            <div class="col-lg-7 mb-4">
                <input type="text" name="city" class="form-control" placeholder="{{trans('forms.city')}}" required>
            </div>
            <div class="col-lg-4 mb-4">
                <input type="text" name="responsible_person_name" class="form-control" placeholder="{{trans('forms.responsible_person_name')}}" required>
            </div>
            <div class="col-lg-7 mb-4">
                <input type="text" name="phone_number" class="form-control" placeholder="{{trans('forms.phone')}}" required>
            </div>

{{--            <label for="company_name">{{trans('form.company_name')}}</label>--}}


            {{--            <input type="text" name="company_activity" class="form-control" placeholder="company_activity">--}}
{{--            <input type="text" name="dealing_banks" class="form-control" placeholder="dealing_banks">--}}

{{--            <input type="text" name="age_of_company" class="form-control" placeholder="age_of_company">--}}


{{--            <input type="text" name="email" class="form-control" placeholder="email" >--}}
            {{--        <input type="text" name="car_id" class="form-control" placeholder="car_id" required>--}}


            <input type="text" name="type" value="cash" class="form-control" placeholder="{{trans('forms.type')}}" hidden>

            @php
                $name='name_'.trans('systems.lang');

            @endphp
            <div class="filterCars container">
                <div class="row justify-content-between align-items-center w-100 m-auto">
                    <div class=" col-md-3 col-sm-6 mb-2 text-center">
                        <div class="select-option">
                            <select id="brand3" name="" class="p-2" name="" id="">
                                <option value="" >Select Car Brand</option>
                                @foreach($data['brands'] as $brand)
                                    <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class=" col-md-3 col-sm-6 mb-2 text-center">
                        <div class="select-option">
                            <select id="classname3" name=""   class="p-2" name="" id="">
                                <option value="">Select Car Class</option>
                            </select>
                        </div>
                    </div>

                    <div class=" col-md-3 col-sm-6 mb-2 text-center">
                        <div class="select-option">
                            <select  id="carname3" name="" class="p-2" name="" id="">
                                <option value="">Select Car </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2  col-sm-6 mb-2 text-left">
                        <div class="allCars ">
                            <a class="btn text-uppercase bg-white added-btn" id="addbtn2"><i class="icofont-plus"></i></a>
                        </div>
                        <div id="btndone1"></div>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 mb-2">
                <div id="cas2" class="row justify-content-between align-items-center text-center">
                </div>
            </div>

                <textarea  name="text" class="form-control" placeholder="{{trans('forms.text')}}" required rows="6"></textarea>

            <input type="submit"   value="{{trans('form.send')}}" class="btn type1 text-center mt-2 w-100">


        </div>
    </form>
@section('script3')
    <script>
        var ch=false;
        
        // brand id to class
        $('#brand3').change(function(){
                    $("#classname3").html('<option> select class</option>');
                     $("#carname3").html('<option> select car</option>');
            var brandId = $(this).children("option:selected").val();
            // alert("You have selected the country - " + selectedCountry);
            //  console.log(brandId)
            fetch('getBrandClasses/'+brandId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    var data;
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name=myJson[i]['name_en']
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#classname3").append(o);
                    }
                    console.log(myJson);
                });
        });
        //  get cars
        $('#classname3').change(function () {

            var classId = $(this).children("option:selected").val();


            fetch('GetCars/'+classId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    console.log('-----------------')

                    console.log(myJson)
                    var data;
                    $("#carname3").html('<option> select  car</option>');
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name = myJson[i]['car_name_en'];
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#carname3").append(o);
                    }
                    console.log(myJson);
                });


        });
        $('#carname3').change(function () {
            var car_id =$(this).children("option:selected").val();
            var car_name=$(this).children("option:selected").text();
            ch = !ch

            $('#addbtn2').click(function () {
                if(ch) {
                    $('#btndone1').append('<input type="hidden" name="car_id[]" value=' + car_id + '>');
                    $('#btndone1').append('<input type="hidden" name="car_name[]" value=' + car_name + '>');
//Add and remove car name
                    $('#cas2').append(
                             '<div class="'+car_name+' form-div col-md-4 col-sm-12 ">'+
                            '<ul class=" form-added">   <li style="color: black">'+car_name+'</li> <li style="color: black ; backgroundColor:red;" onclick="cliked(this)" id="ah" class="icofont-close-line ml-3  btn btn-danger  removecar" remove="'+car_name+'" ></li> </ul>'+ '</div>');

                    //End of it
                    console.log('don')
                    ch = !ch;
                    // console.log(ch)
                    // console.log(this.checked)
                    $('#addbtn2'). unbind();
                }
            })


        })
        function cliked(e){
            var attrs=e.getAttribute('remove');

            var clas2 ='.'+attrs.toString();

            document.querySelectorAll(clas2).forEach(function(a){
                a.remove()
            })

        }
    </script>

@endsection
