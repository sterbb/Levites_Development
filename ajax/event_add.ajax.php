<?php
require_once "../controllers/calendar.controller.php";
require_once "../models/calendar.model.php";

class AddCalendarEvent{

    public $event_title;
    public $event_type;
    public $event_date;
    public $event_time;

    public function addEvent(){
      $event_title = $this->event_title;
      $event_type = $this->event_type;
      $event_date = $this->event_date;
      $event_time = $this->event_time;

       $data = array("event_title"=> $event_title,
       "event_type"=> $event_type,
       "event_date"=> $event_date,
       "event_time"=> $event_time);
       return $answer = (new ControllerCalendar)->ctrAddEvent($data);

    }

    
}
 

$addEvent = new AddCalendarEvent();

$addEvent -> event_title = $_POST["event_title"];
$addEvent -> event_type = $_POST["event_type"];
$addEvent -> event_date = $_POST["event_date"];
$addEvent -> event_time = $_POST["event_time"];

$addEvent -> addEvent();
