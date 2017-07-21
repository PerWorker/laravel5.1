@extends('master')
@section('content')
{!! Form::open(['url'=>'/auth/register']) !!}
{!! Form::label('用户名:') !!}
{!! Form::text('username',null,['class'=>'username','placehoder'=>'请输入用户名']) !!}
{!! Form::label('邮箱:') !!}
{!! Form::text('email',null,['class'=>'email','placehoder'=>'请输入邮箱']) !!}
{!! Form::label('密码:') !!}
{!! Form::password('password',['class'=>'password','placehoder'=>'请输入密码']) !!}
{!! Form::label('确认密码:') !!}
{!! Form::password('password_confirmation',['class'=>'password','placehoder'=>'确认密码']) !!}
{!! Form::submit('注册') !!}
{!! Form::close()  !!}
@include('errors.list')
@stop