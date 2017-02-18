@extends('admin')
@section('title')
    <title>CMS</title>
@endsection

@section('content')

<div class="row">
    <h1 class="page-header">Things To Do<small></small></h1><a href="{{url('/')}}/admin/{{Request::segment(2)}}/insert"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
</div>
<br>

<table class="table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($todo as $t)
        <tr id="{{$t->id}}">
            <td>{{$t->title}}</td>
            <td>{{$t->category}}</td>
            <td>
                <a href="{{url('/')}}/admin/things-to-do/activity/insert/{{$t->id}}" class="btn btn-default">Activities</a>
                <a href="{{url('/')}}/admin/things-to-do/update/{{$t->id}}" class="btn btn-default">Update</a>
                <button type="button" class="btn btn-default btn-del" data-id="{{$t->id}}">Delete</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection

