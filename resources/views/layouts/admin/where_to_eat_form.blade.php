@extends('admin')
@section('title')
    <title>CMS || Where To Eat </title>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Where To Eat {{ucfirst(Request::segment(3))}}</h1>
    </div>
</div>
<form id="addForm" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>File</label>
                <input type="file" class="form-control req"  name="background_img" id="background_img">
            </div>
            @if($errors->has('background_img'))
                {{$errors->first('background_img')}}
            @endif
        @if(isset($data))
            <img src="{{url('uploads/'.Request::segment(2).'/'.$data->background_img)}}" height="250px" width="300px">
        @endif
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Logo</label>
                <input type="file" class="form-control req"  name="logo" id="logo">
            </div>
            @if($errors->has('logo'))
                {{$errors->first('logo')}}
            @endif
        @if(isset($data))
            <img src="{{url('uploads/'.Request::segment(2).'/'.$data->logo)}}" height="250px" width="300px">
        @endif
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control req" id="title" name="title" placeholder="Input Title"  value="{{isset($data) ? $data->title : ''}}">
                @if($errors->has('title'))
                    {{$errors->first('title')}}
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control text-content" name="content" rows="7" id="content">{{isset($data) ? $data->content : ''}}</textarea> 
                @if($errors->has('content'))
                    {{$errors->first('content')}}
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Tags</label>
                <input type="text" class="form-control req" id="tag" name="tag" placeholder="Input Title"  value="{{isset($data) ? $data->tags : ''}}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-sub"></button>
            </div>
        </div>
    </div>
</form>
@endsection
