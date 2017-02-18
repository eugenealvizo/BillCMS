@extends('admin')
@section('title')
    <title>CMS || Page Banner </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Page Banners [{{$banners->page}}]</h1>
    </div>
</div>
<form id="bannerForm" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-6">
        </div>
    </div>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    <div class="img-container">
        <div class="row row-img">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Image</label>
                    <br>
                    <img src="{{url('/uploads/banners/'.$banners->banner)}}" height="270px" width="525px" />
                </div>
                <input type="file" class="form-control req"  name="banner" id="banner">
                <br>
            </div>
            <div class="col-sm-6">
            <div class="col-sm-6"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="col-sm-6"></div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-banner-sub">
            </div>
        </div>
    </div>
</form>
@endsection
