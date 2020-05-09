
    <form id="formGovernment" class="mt-4" method="post"  action="{{route('formgovernment.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between form-group government-gutter">
            <div class="col-md-7 col-sm-12 mb-4">
                <input type="text" name="sector_name" class="form-control"  placeholder="{{trans('forms.sector_name')}}" required>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                <input type="text" name="person_name" class="form-control" placeholder="{{trans('forms.person_name')}}" required>
            </div>

            <div class="col-md-7 col-sm-12 mb-4">
                <input type="text" name="email" class="form-control" placeholder="{{trans('forms.email')}}" required>
            </div>


            <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                <input type="text" name="city" class="form-control" placeholder="{{trans('forms.city')}}" required>
            </div>

            <div class="col-md-7 col-sm-12 mb-4">
                <input type="text" name="phone" class="form-control" placeholder="{{trans('forms.phone')}}" required>
            </div>

            @php
                $name='name_'.trans('systems.lang');

            @endphp
            <div class="filterCars container ">
                <div class="row justify-content-between align-items-center w-100 m-auto">
                    <div class="col-sm-6 col-md-3 mb-2 text-center">
                        <div class="select-option text-white">
                            <select id="brand6" name="" class="p-2" name="" id="">
                                <option value="" >Select Car Brand</option>
                                @foreach($data['brands'] as $brand)
                                    <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3  mb-2 text-center">
                        <div class="select-option text-white">
                            <select id="classname6" name=""   class="p-2" name="" id="">
                                <option value="">Select Car Class</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3  mb-2 text-center">
                        <div class="select-option text-white">
                            <select  id="carname6" name="" class="p-2" name="" id="">
                                <option value="">Select Car </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2 text-left">
                        <div class="allCars ">
                            <a class="btn text-uppercase bg-white added-btn" id="addbtn6"><i class="icofont-plus"></i></a>
                        </div>
                        <div id="btndone6"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mb-2">
                <div id="cas6" class=" row justify-content-between align-items-center text-center">
                </div>
            </div>
            <textarea  name="text" class="form-control" placeholder="{{trans('forms.text')}}" required rows="6"></textarea>
            <input type="submit"   value="{{trans('form.send')}}" class="btn type1 text-center mt-2 w-100">
        </div>
    </form>
@section('script6')
    <script>
        var ch=false;
        
        // brand id to class
        $('#brand6').change(function(){

            var brandId = $(this).children("option:selected").val();
            // alert("You have selected the country - " + selectedCountry);
            //  console.log(brandId)
            fetch('getBrandClasses/'+brandId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    var data;
                     $("#classname6").html('<option> select class</option>');
                     $("#carname6").html('<option> select car</option>');
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name=myJson[i]['name_en']
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#classname6").append(o);
                    }
                    console.log(myJson);
                });
        });
        //  get cars
        $('#classname6').change(function () {

            var classId = $(this).children("option:selected").val();


            fetch('GetCars/'+classId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    console.log('-----------------')

                    console.log(myJson)
                    var data;
                     $("#carname6").html('<option> select  car</option>');
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name = myJson[i]['car_name_en'];
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#carname6").append(o);
                    }
                    console.log(myJson);
                });


        });
        $('#carname6').change(function () {
            var car_id =$(this).children("option:selected").val();
            var car_name=$(this).children("option:selected").text();
            ch = !ch

            $('#addbtn6').click(function () {
                if(ch) {
                    $('#btndone6').append('<input type="hidden" name="car_id[]" value=' + car_id + '>');
                    $('#btndone6').append('<input type="hidden" name="car_name[]" value=' + car_name + '>');
//Add and remove car name
                    $('#cas6').append('<div class="'+car_name+' form-div col-md-4 col-sm-12"> <ul class="list-untyled form-added"> <li style="color: black">'+car_name+'</li> <li><i class="icofont-close-line btn btn-danger removecar ml-3" onclick="cliked(this)" id="ah" remove="'+car_name+'"></i></li></ul> </div>');


                    //End of it
                    console.log('don')
                    ch = !ch;
                    // console.log(ch)
                    // console.log(this.checked)
                    $('#addbtn1'). unbind();
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
