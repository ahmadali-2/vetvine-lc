<?php

use Illuminate\Support\Facades\Auth;

//(selectionTimeZone,time,)
function convertToTimeZone($array, $time, $region){
    $timeZone = $array;
    // Fetching timezone UTC code : Please don't screw it
    $pieces = explode('(', $timeZone);
    $pieces = explode('C', $pieces[1]);
    $pieces = explode(')', $pieces[1]);
    // Formatting the time
    $today = new DateTime($time, new DateTimeZone($region)); //todays.........
    $userTimeZone = $array;
    // Fetching timezone UTC code : Please don't screw it
    $pieces = explode('(', $userTimeZone);
    $pieces = explode('C', $pieces[1]);
    $pieces = explode(')', $pieces[1]);
    $userEventTime = new DateTimeZone($pieces[0]);  ///User event time
    $convertedTime = $today->setTimeZone($userEventTime); //Converted Date time
    $result = $convertedTime->format('H:i A') . ' ' . $userTimeZone; //final timezone
    // dd($result);
    return $result;
}
