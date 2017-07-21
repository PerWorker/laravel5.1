@extends('master')
@section('content')
{!! Form::open(['url'=>'/auth/login']) !!}
{!! Form::label('email:') !!}
{!! Form::email('email',null,['class'=>'email','placehoder'=>'请输入用户名']) !!}
{!! Form::label('password:') !!}
{!! Form::password('password',null,['class'=>'password','placehoder'=>'请输入密码']) !!}
{!! Form::submit('登陆') !!}
{!! Form::close() !!}
@include('errors.list')
@stop