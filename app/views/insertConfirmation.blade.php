@extends('_master')

@section('title')
	Poll Added
@stop


@section('content')

<div id="page-wrap">

<p> The poll <b>{{$pollTitle}}</b> was successfully added. </p>

<p> You can share your report using the following link. </p> <br/>

<?php $url = Request::url(); $parse = parse_url($url); $host = $parse['host'];?>


{{$host}}/polls/title/{{$pollTitle}}

 <br/>

<p> Do you want to create another poll? </p>

{{ Form::open(array('url' => '/create')) }}

{{ Form::submit('Create') }}

{{ Form::close() }}

		
@stop