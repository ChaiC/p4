<?php

class addRowsController extends BaseController {

	public function addRows(){		
	
		$author = Input::get('authorName');
		$pollTitle = Input::get('pollTitle');
		$storedIds = [0,0,0,0,0];
		
		echo $author;
	
		for ($i=1; $i < 6; $i++){
			$question = Input::get("q{$i}question");
			$c1 = Input::get("q{$i}c1");
			$c2 = Input::get("q{$i}c2");
			$c3 = Input::get("q{$i}c3");
			$isc1 = Input::get("q{$i}isc1");
			$isc2 = Input::get("q{$i}isc2");
			$isc3 = Input::get("q{$i}isc3");

			//$qa = new qna();
			
			if($isc1){
				$correctID = 1;
			} elseif($isc2){
				$correctID = 2;
			} else{
				$correctID = 3;
			}
			
			$record = qna::create(array(		
				'question' => $question,
				'c1' => $c1,
			    'c2' => $c2,
				'c3' => $c3,
				'correct' => $correctID,
			));
			
			$storedIds[$i-1] = $record->id;		
		}
		
		foreach ($storedIds as $value) {
			$p = new poll();
			$p->author = $author;
			$p->pollTitle = $pollTitle;
			$p->questionID = $value;
			$p->save();
		}	
		
		
		return Redirect::to('/confirmation')->with('pollTitle', $pollTitle);
		// return View::make('insertCOnfirmation')->with('pollTitle', $pollTitle);
	}
	
	
}