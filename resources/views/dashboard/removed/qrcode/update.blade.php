@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('qrcode.addqrcode')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dqrcode.update',[$qrArray[0]->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')

                                <div class="custom-control custom-switch">
                                    <input type="checkbox" @if ($qrArray[0]->show===null) @else checked @endif  value="1" name="show" class="custom-control-input" id="switch1">
                                    <label class="custom-control-label" for="switch1">{{trans('qrcode.show')}}</label>
                                    @if($errors->has('show'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('show')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="alt_certificates_2">{{trans('qrcode.qrcodeimage')}}</label>
                                    <input type="file" name="image_path" class="form-control">

                                @if($errors->has('image_path'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('image_path')[0] }}</span>
                                    @endif

                                </div>



                                <br>
                                <button class="btn btn-success" type="submit">{{trans('qrcode.addqrcode')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
                <br>


            </div>
        </div>
    </div>
@endsection