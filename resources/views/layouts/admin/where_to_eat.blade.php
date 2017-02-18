@extends('admin')
@section('title')
    <title>CMS</title>
@endsection

@section('content')

<div class="row">
    <h1 class="page-header">Where To Eat<small></small></h1><a href="{{url('/')}}/admin/{{Request::segment(2)}}/insert"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
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
    @foreach($eat as $e)
        <tr id="{{$e->id}}">
            <td>{{$e->title}}</td>
            <td>{{$e->category}}</td>
            <td>
                <a href="{{url('/')}}/admin/where-to-eat/images/insert/{{$e->id}}" class="btn btn-default">Images</a>
                <a href="{{url('/')}}/admin/where-to-eat/update/{{$e->id}}" class="btn btn-default">Update</a>
                <button type="button" class="btn btn-default btn-del" data-id="{{$e->id}}">Delete</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection

