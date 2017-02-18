@extends('layouts.app')

@section('title', 'Comments')

@section('main')


<a href="comments/create">POSTS</a>
<br/>
<a href="comments/1/edit">EDIT</a>
<br/>
<a href="comments">DELETE</a>
<!-- <a href="posts/show">Edit</a> -->
<br/>

<form action="/comments/1" method="POST">
	{{csrf_field()}}
	{{method_field('delete')}}
	<button type="submit">Submit</button>
	
</form>

@endsection