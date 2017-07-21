@extends('master')
@section('content')
<h3>文章页面显示</h3>
<h5>Articles-》{{ Auth::user()->username }}</h5>
@foreach($articles as $v)
<!--<h5><a href="/articles/{{$v->id}}">{{ $v->title }}</a></h5>-->
<!--<h5><a href="{{ url('articles',$v->id) }}">{{ $v->title }}</a></h5>-->
<h5><span>{{$v->id}}、</span><a href="{{ action('ArticlesController@show',$v->id) }}">{{ $v->title }}</a></h5>
<div>{{$v->content}}  {{$v->published_at}}</div>
@endforeach
@stop