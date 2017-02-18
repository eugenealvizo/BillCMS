@extends('admin')
@section('title')
    <title>CMS || Places To Stay </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Category {{ucfirst(Request::segment(3))}}</h1>
    </div>
</div>
<form id="addForm" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
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
        <div class="col-sm-6">
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-sub"></button>
            </div>
        </div>
    </div>
</form>
@endsection
