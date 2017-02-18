@extends('admin')
@section('title')
    <title>CMS || Mobile </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Billing {{ucfirst(Request::segment(3))}}</h1>
    </div>
</div>
<form id="addForm" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Category Name</label>
                <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" <?=!empty($data) && $data->category_id == $category->id ? 'selected' : ''?> > {{$category->title}}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Subscribers Name</label>
                <select class="form-control js-example-basic-single" id="userid" name="user_id">
                    @foreach($users as $user) 
                    <option value="{{$user->id}}" <?=!empty($data) && $data->user_id == $user->id ? 'selected' : ''?>>{{$user->fname.' '.$user->lname}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Billing Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?=!empty($data)  ? $data->address : ''?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Date Issued</label>
                <input id="datepicker" class="form-control" type="text" name="date_issued" value="<?=!empty($data)  ? $data->date_issued : ''?>">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Due date</label>
                <input class="form-control" id="datepicker2" type="text" name="due_date" value="<?=!empty($data)  ? $data->due_date : ''?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Previous Balance</label>
                <input class="form-control" type="number" name="prev_bal" value="<?=!empty($data)  ? $data->prev_bal : ''?>">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Total Price</label>
                <input class="form-control"  type="number" id="total" name="total_price" value="<?=!empty($data) ? $data->total_price : ''?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Detailed Price</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Usage Range</label>
                <input class="form-control" type="text" name="usage_range" value="<?=!empty($data) ? $data->usage_range : ''?>">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Subtotal</label>
                <input class="form-control"  type="text" name="subtotal" value="<?=!empty($data) ? $data->subtotal : ''?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Tax</label>
                <input class="form-control" type="number" name="tax" value="<?=!empty($data)  ? $data->tax : ''?>">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Paypal %</label>
                <input class="form-control" type="number" name="paypal_price" value="<?=!empty($data) ? $data->paypal_price : ''?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Total Price</label>
                <input class="form-control" type="number" id="dumtotal" disabled="true" value="<?=!empty($data) ? $data->total_price : ''?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-sub"></button>
            </div>
        </div>
    </div>
</form>
@endsection
