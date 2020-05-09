@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('whats.whats')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dwhatsAndWe.update',[$data[0]->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <select name="whats" class="custom-select" required>
                                        <option value="" selected >{{trans('whats.ubpdatewhats')}} {{$data[0]->phones->phone}}</option>
                                        @foreach($phones as $phone)
                                            <option value="{{$phone->id}}"><p>{{$phone->phone}}</p></option>
                                        @endforeach

                                    </select>
                                    @if($errors->has('whats'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('whats')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <select name="we" class="custom-select" required>
                                        <option value="" selected >{{trans('whats.ubpdatewe')}}{{$data[0]->phoneswe->phone}}</option>
                                        @foreach($phones as $phone)
                                            <option value="{{$phone->id}}"><p>{{$phone->phone}}</p></option>
                                        @endforeach

                                    </select>
                                    @if($errors->has('we'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('we')[0] }}</span>
                                    @endif

                                </div>



                                <br>
                                <button class="btn btn-success" type="submit">{{trans('whats.addWhats')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
                <br>


            </div>
        </div>
    </div>
@endsection