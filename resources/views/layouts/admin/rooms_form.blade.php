@extends('admin')
@section('title')
    <title>CMS || Places To Stay </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Places To Stay {{ucfirst(Request::segment(3))}}</h1>
    </div>
</div>
<form id="addForm" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            @if(isset($data))
            <img src="{{url('/uploads/rooms/'.str_replace(' ', '-', preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $data->icon)))}}" height="250px" width="300px">
            @endif
            <input type="file" class="form-control req"  name="icon">
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
        <div class="col-sm-6">
            <div class="form-group">
                <label for="sel1">Hotel</label>
                <select class="form-control" name="hotel_id" id="hotel_id">
                    <option value="">Select</option>
                    @foreach($hotels as $hotel)
                    <option value="{{$hotel->id}}" {{isset($data) && $data->hotel_id == $hotel->id ? 'selected' : ''}}>{{$hotel->title}}</option>
                    @endforeach
                </select>
                @if($errors->has('hotel_id'))
                    {{$errors->first('hotel_id')}}
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" id="price" value="{{isset($data) ? $data->price : '' }}" >
                @if($errors->has('price'))
                    {{$errors->first('price')}}
                @endif
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Minimum</label>
                <select class="form-control" name="min">
                <?php for($i = 1; $i <= 9; $i++) { ?>
                    <option value="<?=$i?>"><?=$i?></option>
                <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Maximum</label>
                <select class="form-control" name="max">
                <?php for($i = 1; $i <= 9; $i++) { ?>
                    <option value="<?=$i?>"><?=$i?></option>
                <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="text-content form-control" name="description" id="description" rows="7">{{isset($data) ? $data->description : ''}}</textarea> 
                @if($errors->has('description'))
                    {{$errors->first('description')}}
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
