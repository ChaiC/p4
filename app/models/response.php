<?php

class response extends Eloquent {
	public $timestamps = false;
	protected $fillable = array('id','pollTitle','questionID','participant','answer');
}