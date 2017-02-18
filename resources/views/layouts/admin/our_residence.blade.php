@extends('admin')
@section('title')
    <title>CMS || Our Residences </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Our Residences</h1>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($residence as $res)
        <tr>
            <td style="vertical-align:middle">{{$res->title}}</td>
            <td>
                <a href="{{url('/')}}/admin/our-residences/images/insert/{{$res->id}}" class="btn btn-default">Images</a>
                <a href="{{url('/')}}/admin/our-residences/update/{{$res->id}}" class="btn btn-default">Update</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Communities<small></small></h1><a href="{{url('/')}}/admin/community/insert"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
    </div>
</div>
<br>
<table class="table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($community as $comm)
        <tr id="{{$comm->id}}">
            <td style="vertical-align:middle">{{$comm->title}}</td>
            <td>
                <a href="{{url('/')}}/admin/community/update/{{$comm->id}}" class="btn btn-default">Update</a>
                <button type="button" class="btn btn-default btn-del" data-id="{{$comm->id}}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection