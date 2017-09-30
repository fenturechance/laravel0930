<!-- 檔案：resources/views/posts/edit.blade.php -->
@extends('layouts.app')
@section('content')

<h1>編輯文章</h1>
{!! Form::model($post,
	['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
	{{csrf_field()}}
	<div class="form-group">
		{!! Form::label('title','標題：')!!}
		{!! Form::text('title',null,['class'=>'form-control'])!!}
	</div>
	{!! Form::submit('編輯',['class'=>'btn btn-info'])!!}
{!! Form::close()!!}

{!! Form::open([
	'method'=>'DELETE',
	'action'=>['PostsController@destroy',$post->id]]) !!}
	{{csrf_field()}}
	{!! Form::submit('刪文',['class'=>'btn btn-danger'])!!}
{!! Form::close()!!}

@endsection