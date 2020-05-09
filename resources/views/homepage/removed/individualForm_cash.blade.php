
@Section('style')
    <style>
        .form-added {list-style-type: armenian; display: flex;}
        .form-added li {display: inline;}
        .checked-radio  .new-radio{background-color: #CE0638 ;}
    </style>
@endsection


<section>
    <form method="post" action="{{route('formindividualcash.store')}}" class="individual-cash"  enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between form-group">
            <div class="col-lg-7 mb-4">
                <input type="text" name="name" class="form-control"  placeholder="{{trans('forms.your_name')}}" required>
            </div>
            <div class="col-lg-4 mb-4">
                <input type="text" name="city" class="form-control" placeholder="{{trans('forms.city')}} " required>
            </div>

            <div class="col-lg-7 mb-4">
                <input type="text" name="phone_number" class="form-control" placeholder="{{trans('forms.phone')}}" required>
            </div>
            <div class="col-lg-4 mb-4">
                <input type="text" name="nationality" class="form-control" placeholder="{{trans('forms.nationality')}}" required>
            </div>
{{--            <label for="company_name">{{trans('form.company_name')}}</label>--}}
            <input type="text" name="type" value="cash" class="form-control" placeholder="{{trans('forms.type')}}" hidden>

            @php
                $name='name_'.trans('systems.lang');

            @endphp
            <div class="filterCars  container">
                <div class="row justify-content-between align-items-center">
                    <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                        <div class="select-option ">
                            <select id="brand5" name="" class="py-2 px-3" name="" id="">
                                <option value="" >Select Car Brand</option>
                                @foreach($data['brands'] as $brand)
                                    <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                        <div class="select-option ">
                            <select id="classname5" name=""   class="py-2 px-4" name="" id="">
                                <option value="">Select Car Class</option>
                            </select>
                        </div>
                    </div>

                    <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                        <div class="select-option ">
                            <select  id="carname5" name="" class="py-2 px-4" name="" id="">
                                <option value="">Select Car</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-6 mb-2 text-left">
                        <div class="allCars ">
                            <a class="btn text-uppercase added-btn bg-white" id="addbtn5"><i class="icofont-plus"></i></a>
                        </div>
                        <div id="btndone5"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mb-2">
                <div id="cas5" class="row justify-content-between align-items-center text-center">
                </div>
            </div>
            <textarea  name="text" class="form-control" placeholder="{{trans('forms.text')}}" required rows="6"></textarea>
            <input type="submit"   value="{{trans('form.send')}}" class="btn btn-primary text-center mt-2 w-100 type1">
       </div>
    </form>
</section>
@section('script5')
    <script>
        var ch=false;
       
        // brand id to class
        $('#brand5').change(function(){

            var brandId = $(this).children("option:selected").val();
            // alert("You have selected the country - " + selectedCountry);
            //  console.log(brandId)
            fetch('getBrandClasses/'+brandId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    var data;
                    $("#classname5").html('<option> select class</option>');
                     $("#carname5").html('<option> select car</option>');
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name=myJson[i]['name_en']
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#classname5").append(o);
                    }
                    console.log(myJson);
                });
        });
        //  get cars
        $('#classname5').change(function () {

            var classId = $(this).children("option:selected").val();


            fetch('GetCars/'+classId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                   
                    var data;
                     $("#carname5").html('<option> select  car</option>');
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name = myJson[i]['car_name_en'];
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#carname5").append(o);
                    }
                    console.log(myJson);
                });


        });
        $('#carname5').change(function () {
            var car_id =$(this).children("option:selected").val();
            var car_name=$(this).children("option:selected").text();
            ch = !ch

            $('#addbtn5').click(function () {
                if(ch) {
                    $('#btndone5').append('<input class="'+car_name+'" type="hidden" name="car_id[]" value=' + car_id + '>');
                    $('#btndone5').append('<input  class="'+car_name+'" type="hidden" name="car_name[]" value=' + car_name + '>');
                    //var clssss=car_id+car_name;
                    $('#cas5').append('<div class="'+car_name+' form-div col-md-4 col-sm-12" name="'+car_name+'"> <ul class="list-untyled form-added"> <li style="color: black">'+car_name+'  </li>  <li><i onclick="cliked(this)" id="ah" class="btn btn-danger icofont-close-line removecar" remove="'+car_name+'" ></i></li></ul></div>');
                    console.log('don')
                    ch = !ch;
                    // console.log(ch)
                    // console.log(this.checked)
                    $('#addbtn5'). unbind();
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
