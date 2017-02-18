@extends('admin')
@section('title')
    <title>CMS || What's New </title>
@endsection
@section('content')
<div class="row">
    <h1 class="page-header">What's New<small></small></h1><a href="{{url('/')}}/admin/whats-new/insert"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
</div>
<br>
<table class="table">
    <thead>
        <tr>
        <th>Article Title</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr id="{{$article->id}}" >
            <td>{{$article->title}}</td>
            <td>
                <a href="{{url('/')}}/admin/whats-new/update/{{$article->id}}" class="btn btn-default">Update</a>
                <button type="button" class="btn btn-default btn-del" data-id="{{$article->id}}">Delete</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection