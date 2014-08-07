<?php

class PollController extends BaseController {

	public function titleSearch($pollTitle){		
	
		//$p = DB::table('polls')->where('pollTitle', $pollTitle);
		$ps = poll::where('pollTitle', '=', $pollTitle)->get();
		
		$results = '';
		$i = 0;
		foreach($ps as $p){
			
			$qa = qna::where('id','=',$p['questionID'])->get();
			
			$qa = $qa[0]->toArray();
			
			$pollQuestions[$i++] = $qa;   
		}
		//print_r($pollQuestions[0]);
		return View::make('displayPolls')->with('pollQuestions', $pollQuestions)->with('pollTitle',$pollTitle);
		//return $results;		
	}
	
	
}