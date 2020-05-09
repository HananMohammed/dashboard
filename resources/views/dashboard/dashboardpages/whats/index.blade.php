@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('whats.addWhats')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dwhatsAndWe.store') }}" enctype="multipart/form-data" >
                                @csrf

                                <div class="form-group">
                                    <select name="whats" class="custom-select" required>
                                        <option value="" selected >{{trans('whats.phone')}}</option>
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
                                        <option value="" selected >{{trans('whats.we')}}</option>
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