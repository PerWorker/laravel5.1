@extends('master')
@section('content')
<h3>文章修改</h3>
{!! Form::model($articles,['method'=>'PATCH','url'=>'/articles/'.$articles->id]) !!}
@include('articles.form')
{!! Form::close() !!}
@include('errors.list')

@stop