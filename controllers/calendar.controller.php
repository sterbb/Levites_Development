<?php
class ControllerCalendar{
	static public function ctrAddEvent($data){
	   	return $answer = (new ModelCalendar)->mdlAddEvent($data);
	}

	static public function ctrAddGroup($data){
		return $answer = (new ModelCalendar)->mdlAddGroup($data);
	 }

	static public function ctrShowEvents($data){
		return $answer = (new ModelCalendar)->mdlShowEvents($data);
	}


}