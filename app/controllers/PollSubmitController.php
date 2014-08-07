<?php

class PollSubmitController extends BaseController {

	public function addPollsTaken(){		

		$pollTitle = Input::get('pollTitle');
		$participant = Input::get('participantName');
		$p = new poll();
		$questionIDs = poll::where('pollTitle','=',$pollTitle)->get(array('questionID'));
		$questionIDs = $questionIDs->toArray();
		//print_r($questionIDs);
		
		for ($i=1; $i < 6; $i++){
			
			$isc1 = Input::get("q{$i}isc1");
			$isc2 = Input::get("q{$i}isc2");
			$isc3 = Input::get("q{$i}isc3");
			
			//$r = new response();
			
			if($isc1){
				$correctID = 1;
			} elseif($isc2){
				$correctID = 2;
			} else{
				$correctID = 3;
			}
			
			$questionArray = $questionIDs[$i-1];
			
			$record = response::create(array(		
				'pollTitle' => $pollTitle,
				'questionID' => $questionArray['questionID'],
				'participant' => $participant,
				'answer' => $correctID,
			));
			
		}	
		
		//return Redirect::to('/pollSubmitConfirmation')->with('pollTitle', $pollTitle);
		return View::make('PollSubmitConfirmation')->with('pollTitle', $pollTitle);
	
	}
	
}