@extends('admin')
@section('title')
    <title>CMS || Page Banners</title>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Page Banners</h1>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Image Preview</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($banners as $banner)
        <tr>
            <td>{{$banner->page}}</td>
            <td><img src="{{url('uploads/banners/'.$banner->banner)}}" width="250px" height="100px"></td>
            <td>
                <a href="{{url('/')}}/admin/page-banners/update/{{$banner->slug}}" class="btn btn-default">Update</a> 
           </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection

