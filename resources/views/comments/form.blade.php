@extends('layouts.app')

@section('title', 'Comments')

@section('main')


@if($errors)
	@foreach($errors->all() as $err)
		{{$err}}
	@endforeach
@endif

<form action="/comments/{{isset($id) ? $id : ''}}" method="POST">
	{{csrf_field()}}
	{{method_field($method)}}
	<input type="text" name="title">
	<br />

	<input type="text" name="body">
	<br />
	<button type="submit">Submit</button>
	
</form>

@endsection