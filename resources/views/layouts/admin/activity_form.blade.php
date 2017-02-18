@extends('admin')
@section('title')
    <title>CMS || Things To Do </title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{$data->title}} Activities</h1>
    </div>
</div>
<form id="addForm" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <?php 
        $activities = json_decode($data->activity, TRUE);
        $desc       = json_decode($data->activity_desc, TRUE);
        $images     = json_decode($data->images, TRUE);
    ?>

    <input type="hidden" name="category" value="{{$data->category}}">
    <div class="row">
        <div class="col-sm-6">
            <a href="javascript:void(0)" id="add-new"><i class="fa fa-plus"></i> Add New Activity</a>
        </div>
    </div>
    @if(count($activities) > 0)
        @foreach($activities as $k => $v) 
        <br>
        <div class="img-container">
            <div id="container-{{$k}}">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Image File</label>
                            <br/> <br/>
                            <img src="{{url('/uploads/things-to-do/'.$data->category.'/'.$images[$k])}}" height="250px" width="300px">
                            <br/> <br/>
                            <input type="file" class="form-control req"  name="image[]" value="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <a href="javascript:void(0)" class="btn btn-danger btn-rm" data-id="{{$k}}">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name='activity[title][]' value="{{$activities[$k]}}"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class=" form-control" name="activity[desc][]" rows="7">{{$desc[$k]}}</textarea> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <br>
        <div class="img-container">
            <div id="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Image File</label>
                            <br/> <br/>
                            <br/> <br/>
                            <input type="file" class="form-control req"  name="image[]" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name='activity[title][]' value=""/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class=" form-control" name="activity[desc][]" rows="7"></textarea> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="row btn-sub-db">
            <div class="col-sm-6">
                <div class="form-group">
                    <a href="javascript:void(0)" class="btn btn-primary btn-sub activity-btn">SUBMIT</a>
                </div>
            </div>
        </div>
</form>
@endsection
