<?php

/*
 * THIS SOURCE CODE CALCULATES THE TIME BETWEEN TWO TIMESTAMPS IN PHP
 * Victor Mwenda
 * vmwenda.vm@gmail.com
 * Sun, 11:00 PM 23-08-2015
 */
$now = time();
sleep(1);
$after_sleep = time();

echo getElapsedTime($now,$after_sleep);

function getElapsedTime($from_timestamp,$to_timestamp){
	$second = 1;
	$minute = 60;
	$hour = $minute * 60;
	$day = 24 * $hour ;
	$week = $day * 7;
	$month = $day * 30;
	$year = $month * 12;

	$time_diff = $to_timestamp - $from_timestamp;

	$duration = "";

	$years = (int)($time_diff / ($year));

	if($years>0){
		$time_diff = $time_diff - ($year * $years);

		$duration .= $years. ($years>1?' Years ' : ' Year ');
	}

	$months = (int)($time_diff / ($month));
	if($months>0){
		$time_diff = $time_diff - ($month * $months);

		$duration .= $months. ($months>1?' Months ' : ' Month ');
	}


	$weeks = (int)($time_diff / ($week));
	if($weeks>0){
		$time_diff = $time_diff - ($week * $weeks);

		$duration .= $weeks. ($weeks>1?' Weeks ' : ' Week ');
	}

	$days = (int)($time_diff / ($day));
	if($days>0){
		$time_diff = $time_diff - ($day * $days);

		$duration .= $days. ($days>1?' Days ' : ' Day ');
	}

	$hours = (int)($time_diff / ($hour));
	if($hours>0){
		$time_diff = $time_diff - ($hour * $hours);

		$duration .= $hours. ($hours>1?' Hours ' : ' Hour ');
	}

	$minutes = (int)($time_diff / ($minute));
	if($minutes>0){
		$time_diff = $time_diff - ($minute * $minutes);

		$duration .= $minutes. ($minutes>1?' Minutes ' : ' Minute ');
	}

	$seconds = (int)($time_diff / ($second));
	if($seconds>0){
		$time_diff = $time_diff - ($second * $seconds);

		$duration .= $seconds. ($seconds>1?' Seconds ' : ' Second ');
	}

	return $duration;
}
?>
