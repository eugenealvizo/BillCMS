@extends('admin')
@section('title')
    <title>CMS</title>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Billing<small></small></h1><a href="{{url('/')}}/admin/{{Request::segment(2)}}/insert"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Bill a subscriber</a>
    </div>
</div>
<br>
<table class="table">
    <thead>
        <tr>
        <th>Name</th>
        <th>Date Issued</th>
        <th>Due Date</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr id="">    
            <td>{{$d->fname. ' ' .$d->lname}}</td>
            <td>{{$d->date_issued}}</td>
            <td>{{$d->due_date}}</td>
            <td>
                <a href="{{url('/admin/bill-a-subscriber/update/'.$d->billing_id)}}" type="button" class="btn btn-default" data-id="">Update</a>
                <button type="button" class="btn btn-default btn-del" data-id="">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{csrf_field()}}
@endsection

