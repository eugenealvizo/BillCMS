@extends('admin')
@section('title')
    <title>CMS</title>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Hotels<small></small></h1><a href="{{url('/')}}/admin/{{Request::segment(2)}}/hotels/insert"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
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
    @foreach($hotels as $hotel)
        <tr id="{{$hotel->id}}">
            <td>{{$hotel->title}}</td>
            <td>
                <a href="{{url('/')}}/admin/places-to-stay/hotels/update/{{$hotel->id}}" class="btn btn-default">Update</a>
                <button type="button" class="btn btn-default btn-del" data-id="{{$hotel->id}}">Delete</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection

