@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('partners.title')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dpartners.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="title">{{trans('partners.title')}}</label>
                                    <input type="text"   name="title" id="title" class="form-control">


                                </div>

                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="image_path" class="form-control">

                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('partners.add')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection