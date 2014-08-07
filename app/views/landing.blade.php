@extends('_master')

@section('title')
	surveyllance
@stop


@section('content')
<div id="page-wrap">

<p> You can create a new survey and distribute it to potential participants or you can take one of the surveys created by other authors. </p>

<br/>

	<div align="center">
	<p"> What would you like to do today? </p>
	
	
	{{ Form::open(array('url' => '/create')) }}
		
		{{ Form::submit('Create') }}
		
	{{ Form::close() }}
	</div>
	
	<br/><br/>
	
	<div align="center">

	{{ Form::open(array('url' => '/enterTitle')) }}
		
		{{ Form::submit('Fill Out') }}
		
	{{ Form::close() }}
	
	</div`>
	<br/><br/><br/>
	
	
</div>

@stop