@extends('admin')
@section('title')
    <title>CMS || Promos And Events </title>
@endsection
@section('content')
<div class="row">
    <h1 class="page-header">Promos And Events<small></small></h1><a href="{{url('/')}}/admin/promos-and-events/insert"><i class="fa fa-plus-circle" aria-hidden="true"></i> Insert New Promo / Event</a>
</div>
<br>

<table class="table">
    {{csrf_field()}}
    <thead>
        <tr>
        <th>Post Title</th>
        <th>Category</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr id="{{$post->id}}">
            <td style="vertical-align:middle">{{$post->title}}</td>
            <td style="vertical-align:middle">{{$post->category_id == 1 ? 'Promo' : 'Event'}}</td>
            <td class="category-{{$post->category_id}}">
                <a href="javascript:void(0)" data-cat="{{$post->category_id}}" data-id="{{$post->id}}" class="btn {{$post->featured == 1 ? 'btn-success' : 'btn-default' }} btn-feat ">Featured</a>
                <a href="{{url('/')}}/admin/promos-and-events/update/{{$post->id}}" class="btn btn-default">Update</a>
                <button type="button" class="btn btn-default btn-del" data-id="{{$post->id}}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection