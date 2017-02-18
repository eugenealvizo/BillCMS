@extends('admin')
@section('title')
    <title>CMS</title>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Categories<small></small></h1><a href="{{url('/')}}/admin/{{Request::segment(2)}}/insert"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Create New Category</a>
    </div>
</div>
<br>
<table class="table">
    <thead>
        <tr>
        <th>Name</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr id="">    
            <td>{{$d->title}}</td>
            <td>
                <a href="{{url('/admin/categories/update/'.$d->id)}}" class="btn btn-default" data-id="">Update</a>
                <button type="button" class="btn btn-default btn-del" data-id="{{$d->id}}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection

