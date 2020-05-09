
@php
$title='title_'.trans('systems.lang');
$description='description_'.trans('systems.lang')
@endphp

    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators mb-2">
                @for($i=0;$i<count($data['slides']) ;$i++)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}" class="@if($i==0) active  @endif "></li>
                 @endfor


            </ol>
            <div class="carousel-inner">
                <!--layer 1 ,2 ,3 -->
                @for($i=0;$i<count($data['slides']) ;$i++)
                        <div class="carousel-item    @if($i == 0) active @endif ">
                            <picture >
                                <source srcset="{{URL::asset('public/image').'/'.$data['slides'][$i]->image_path.'.webp'}}" type="image/webp">
                                <source srcset="{{URL::asset('public/image').'/'.$data['slides'][$i]->image_path}}" type="image/webp">
                                <img src="{{URL::asset('public/image').'/'.$data['slides'][$i]->image_path}}"  class="img-fluid d-block w-100"  alt="layer 1">
                            </picture>
                            <div class=" carousel-caption text-left justify-content-start align-items-center text-white d-flex">
                                <div class="w-50">
                                    <h1 class="text-uppercase"> {{$data['slides'][$i]->$title}}</h1>
                                    <p >{{$data['slides'][$i]->$description}}</p>
                                    <a href="{{URL::to('/form')}}" class="btn text-uppercase type1">{{trans('getoffers.purchase')}}</a>
                                </div>
                            </div>
                        </div>
                @endfor
            </div>
        </div>
    </header>

@php
    $name='name_'.trans('systems.lang');

@endphp
    <div class="filterCars  text-white">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                    <div class="select-option text-white">
                        <select id="brand" name="" class="py-2 px-3" name="" id="">
                            <option value="" >Select Car Brand</option>
                            @foreach($data['brands'] as $brand)
                                <option value="{{$brand->id}}">{{$brand->$name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                    <div class="select-option text-white">
                        <select id="classname" name=""   class="py-2 px-4" name="" id="">
                            <option value="">Select Car Class</option>
                        </select>
                    </div>
                </div>

                <div class=" col-lg-3 col-sm-6 mb-2 text-center">
                    <div class="select-option text-white">
                        <select  id="carname" name="" class="py-2 px-4" name="" id="">
                            <option value="">Select Car </option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-3  col-sm-6 mb-2 text-center">
                    <div class="allCars ">
                        <a id='gocar' href='' class="btn text-uppercase py-3 px-5 type1">{{trans('filter.showbtn')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@section('script')
    <script>
        // brand id to class
        $('#brand').change(function(){

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
                        $("#classname").append(o);
                    }
                    console.log(myJson);
                });
        });
        //  get cars
        $('#classname').change(function () {

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
                        var name = myJson[i]['car_name_ar'];
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#carname").append(o);
                      //  $('#gocar').attr('href','{{URL::to("/car-gallery/")}}/'+id)
                    }
                    console.log(myJson);
                });

        });
        $("#carname").change(function(){
            console.log($(this).children("option:selected").val())
            var id=$(this).children("option:selected").val();
            $('#gocar').attr('href','{{URL::to("/car-gallery/")}}/'+id)
        })

    </script>

@endsection