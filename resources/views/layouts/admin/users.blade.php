@extends('admin')
@section('title')
    <title>CMS</title>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Subscribers<small></small></h1><a href="{{url('/')}}/admin/{{Request::segment(2)}}/rooms/insert"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
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
    @foreach($users as $user)
        <tr id="">    
            <td>{{$user->fname . ' ' . $user->lname}}</td>
            <td>
                <button type="button" class="btn btn-default btn-del" data-id="">Delete</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection

