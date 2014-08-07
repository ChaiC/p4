<?php

class qna extends Eloquent {
	public $timestamps = false;
	protected $fillable = array('id','question','c1','c2','c3','isc1','isc2', 'isc3');
}