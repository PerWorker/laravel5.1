@extends('master')
@section('content')
<h1>数组循环测试</h1>
@if(count($people)>0)
<ul>
	@foreach($people as $v)
	
		<li>{{$v}}</li>
	@endforeach
</ul>
@endif
@stop