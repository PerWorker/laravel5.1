@extends('master')
@section('content')
<h3>文章详情</h3>
<h5>{{ $articles->title }}</h5>
<div>{{$articles->content}}</div>
@stop