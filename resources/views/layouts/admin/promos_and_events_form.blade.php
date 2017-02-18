@extends('admin')
@section('title')
    <title>CMS || Promos And Events </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Promos And Events {{ucfirst(Request::segment(3))}}</h1>
    </div>
</div>
<form id="addForm" action="{{url('/')}}/admin/promos-and-events/{{isset($data) ? $data->id : ''}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>File</label>
                <input type="file" class="form-control req"  name="image" id="image">
            </div>
        @if(isset($data))
            <img src="{{url($dir == 'promos' ? 'uploads/promos/' : 'uploads/events/').'/'.$data->file}}" height="250px" width="300px">
        @endif
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control req" id="title" name="title" placeholder="First Name"  value="{{isset($data) ? $data->title : ''}}">
                @if($errors->has('title'))
                    {{$errors->first('title')}}
                @endif
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" title="Select Category" name="category_id" id="category_id">
                    <option value="">Select</option>
                    <option value="1" {{isset($data) && $data->category_id == 1 ? 'selected' : ''}}>Promos</option>
                    <option value="2" {{isset($data) && $data->category_id == 2 ? 'selected' : ''}}>Events</option>
                 </select>
                @if($errors->has('category_id'))
                    {{$errors->first('category_id')}}
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control req" id="slug" name="slug" placeholder="Insert Pretty Url"  value="{{isset($data) ? $data->slug : ''}}">
                @if($errors->has('slug'))
                    {{$errors->first('slug')}}
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="text-content form-control text-content" name="content" rows="7">{{isset($data) ? $data->content : ''}}</textarea> 
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
                <input type="text" class="form-control req" id="tag" name="tags" placeholder=""  value="{{isset($data) ? $data->tags : ''}}">
                @if($errors->has('slug'))
                    {{$errors->first('slug')}}
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
