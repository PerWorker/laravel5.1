@extends('master')
@section('content')
<h3>创建表单测试</h3>
{!! Form::open(['url'=>'/articles']) !!}
@include('articles.form')
{!! Form::close() !!}
@include('errors.list')
@stop