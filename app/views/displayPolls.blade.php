@extends('_master')

@section('title')
	Create Poll
@stop

@section('content')

<div id="page-wrap">

	{{ Form::open(array('action' => 'pollSubmitController@addPollsTaken'))}}

		Your Name: {{ Form::text('participantName') }} Poll Title {{ Form::text('pollTitle',$pollTitle) }}
	
		<?php $i=1; ?>
	
		@foreach($pollQuestions as $p)	
		
		<p id="questionDisplay"> {{$p['question']}}  </p> 	
		
		<?php $s1 = "q{$i}isc1"; ?>
				
		{{ Form::checkbox($s1, 'False'); }}   
		{{$p['c1']}}
		
		<br/>
		
		<?php $s2 = "q{$i}isc2"; ?>
		{{ Form::checkbox($s2, 'False'); }}    
		{{$p['c2']}}
		<br/>
		
		<?php $s3 = "q{$i}isc3"; ?>
		{{ Form::checkbox($s3, 'False'); }}    
		{{$p['c3']}}
		<br/>
		
		<?php $i = $i + 1;?>
		
		@endforeach
	
		<br/> <br/>
	
		<div align="center">
		{{ Form::submit('Submit') }}
		</div>
	
	{{ Form::close() }}
				
</div>

<br/> <br/> <br/>

@stop
