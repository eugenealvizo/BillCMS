@extends('admin')
@section('title')
    <title>CMS || {{$data->title}} Images </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{$data->title}} Images</h1>
    </div>
</div>

<form id="imageForm" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-6">
        </div>
    </div>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    @if(count($images) > 0) 
        <div class="img-container">
        @foreach($images as $k => $v)
            <div id="container-{{$k}}">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Image</label>
                            <br>
                            <img src="{{url('/uploads/our-residence/'.str_replace(' ', '-', preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $data->title)).'/'.$v)}}" height="250px" width="300px">
                        </div>
                            <input type="file" class="form-control req"  name="images[]">
                            <br>
                    </div>
                    <div class="col-sm-6">
                    <div class="col-sm-6"></div>
                        <div class="form-group">
                            <a href="javascript:void(0);" class="btn btn-danger btn-rm" data-id="{{$k}}">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @else
    <div class="img-container">
        <div class="row row-img">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Image</label>
                    <br>
                </div>
                    <input type="file" class="form-control req"  name="images[]">
                    <br>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="col-sm-6"></div>
            <div class="form-group">
                <a href="javascript:void(0);" class="btn btn-success add-img">Add Image</a>
                <input type="submit" class="btn btn-primary btn-sub">
            </div>
        </div>
    </div>
</form>
@endsection
