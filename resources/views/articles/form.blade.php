<div class="form-group">
	{!! Form::label('Title') !!}
	{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'请输入文章标题']) !!}<br />
	{!! Form::label('Author') !!}
	{!! Form::text('author',null,['class'=>'form-control','placeholder'=>'文章作者']) !!}<br />
	{!! Form::label('content','Content:') !!}
	{!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'请输入内容']) !!}<br />
	<div class="form-group">
		{!! Form::label('published_at','published_at:') !!}
		{!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
	</div>
	{!!Form::submit('发表文章',['class'=>'btn']) !!}
</div>