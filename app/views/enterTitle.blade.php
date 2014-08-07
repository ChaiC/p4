@extends('_master')

@section('title')
	surveyllance
@stop


@section('content')
<div id="page-wrap">

<p> We are assuming that the survey author has shared the title of the survey with you. </p>

<br/>

	{{ Form::open(array('url' => '/polls/title')) }}
		Enter the title:
		<br/>
		{{ Form::text('pollTitle') }}
		
		<br/> <br/>
		
		{{ Form::submit('Submit') }}
		
	{{ Form::close()}}
	
		
	<br/><br/><br/>
	
	
</div>

@stop