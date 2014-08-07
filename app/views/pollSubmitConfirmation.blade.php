@extends('_master')

@section('title')
	Poll Added
@stop


@section('content')

<div id="page-wrap">

<p> The poll <b>{{$pollTitle}}</b> was successfully submitted. </p>

<p> Do you want to take another poll? </p>

{{ Form::open(array('url' => '/enterTitle')) }}

<div align="center">
{{ Form::submit('Sure') }}
</div>

{{ Form::close() }}

<br/> <br/> <br/>

		
@stop