@extends('_master')

@section('title')
	Create Poll
@stop


@section('content')

<div id="page-wrap">

<h2> Hello there! </h2>

	{{ Form::open(array('action' => 'addRowsController@addRows')) }}
	
		Author Name: {{ Form::text('authorName') }}
	
		Poll Name: {{ Form::text('pollTitle') }}
	
		<br/>
		
		<h4> Question 1 </h4>
		
		Enter Question below:
		<br/>
		{{ Form::text('q1question') }}
		<br/>
				
		Enter the choices and specify the correct choice: <br/>
		{{ Form::checkbox('q1isc1', 'False'); }}   
		{{ Form::text('q1c1') }}
		<br/>
		
		{{ Form::checkbox('q1isc2', 'False'); }}    
		{{ Form::text('q1c2') }}
		<br/>
		
		{{ Form::checkbox('q1isc3', 'False'); }}    
		{{ Form::text('q1c3') }}
		<br/>
	
			
		<h4> Question 2 </h4>
		
		Enter Question below:
		<br/>
		{{ Form::text('q2question') }}
		<br/>
				
		Enter the choices and specify the correct choice: <br/>
		{{ Form::checkbox('q2isc1', 'False'); }}   
		{{ Form::text('q2c1') }}
		<br/>
		
		{{ Form::checkbox('q2isc2', 'False'); }}    
		{{ Form::text('q2c2') }}
		<br/>
		
		{{ Form::checkbox('q2isc3', 'False'); }}    
		{{ Form::text('q2c3') }}
		<br/>
	
			
		<h4> Question 3 </h4>
		
		Enter Question below:
		<br/>
		{{ Form::text('q3question') }}
		<br/>
				
		Enter the choices and specify the correct choice: <br/>
		{{ Form::checkbox('q3isc1', 'False'); }}   
		{{ Form::text('q3c1') }}
		<br/>
		
		{{ Form::checkbox('q3isc2', 'False'); }}    
		{{ Form::text('q3c2') }}
		<br/>
		
		{{ Form::checkbox('q3isc3', 'False'); }}    
		{{ Form::text('q3c3') }}
		<br/>
		
		<h4> Question 4 </h4>
		
		Enter Question below:
		<br/>
		{{ Form::text('q4question') }}
		<br/>
				
		Enter the choices and specify the correct choice: <br/>
		{{ Form::checkbox('q4isc1', 'False'); }}   
		{{ Form::text('q4c1') }}
		<br/>
		
		{{ Form::checkbox('q4isc2', 'False'); }}    
		{{ Form::text('q4c2') }}
		<br/>
		
		{{ Form::checkbox('q4isc3', 'False'); }}    
		{{ Form::text('q4c3') }}
		<br/>
		

		<h4> Question 5 </h4>
		
		Enter Question below:
		<br/>
		{{ Form::text('q5question') }}
		<br/>
				
		Enter the choices and specify the correct choice: <br/>
		{{ Form::checkbox('q5isc1', 'False'); }}   
		{{ Form::text('q5c1') }}
		<br/>
		
		{{ Form::checkbox('q5isc2', 'False'); }}    
		{{ Form::text('q5c2') }}
		<br/>
		
		{{ Form::checkbox('q5isc3', 'False'); }}    
		{{ Form::text('q5c3') }}
		<br/>
	
		{{ Form::submit('Create') }}
	
	{{ Form::close() }}
		
@stop