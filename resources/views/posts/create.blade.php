<!-- 檔案：resources/views/posts/create.blade.php -->
@extends('layouts.app')
@section('content')

<h1>發表文章</h1>
{!! Form::open(['method'=>'POST','action'=>'PostsController@store']) !!}
	{{csrf_field()}}
	<div class="form-group">
		{!! Form::label('title','標題：')!!}
		{!! Form::text('title',null,['class'=>'form-control'])!!}
	</div>
	{!! Form::submit('發文',['class'=>'btn btn-primary'])!!}
{!! Form::close()!!}

@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

@endsection