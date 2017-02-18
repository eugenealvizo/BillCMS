@extends('admin')
@section('title')
    <title>CMS || Home Image Reel </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Image Reel</h1>
    </div>
</div>
<form id="addForm" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-6">
        </div>
    </div>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    <div class="img-container">
        @foreach($images as $k => $v)
        <div class="row row-img">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Image</label>
                    <br>
                    <img src="{{url('/uploads/home/images/'.$v)}}" height="250px" width="300px">
                </div>
                <input type="file" class="form-control req"  name="images[]">
                <br>
            </div>
            <div class="col-sm-6">
            <div class="col-sm-6"></div>
                <div class="form-group">
                    <button class="btn btn-danger">Remove</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="col-sm-6"></div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-sub">
                <a href="javascript:void(0);" class="btn btn-success add-img">Add Image</a>
            </div>
        </div>
    </div>
</form>
@endsection
