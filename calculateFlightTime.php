<?php

	/*
	 * calculateFlightTime v1.0.0
	 * https://github.com/ozgrozer/calculateFlightTime
	 *
	 * Copyright 2015 Özgür Özer
	 * Released under the GNU license
	 */

	function calculateFlightTime( $departureTime, $departureTimezone, $arrivalTime, $arrivalTimezone ){

		// Calculate timezone difference
		$timezoneDifference = $departureTimezone - $arrivalTimezone;

		// Convert timezone difference to seconds
		$timezoneDifferenceToSeconds = abs( $timezoneDifference ) * 3600;

		// Calculate time difference
		$timeDifference = $arrivalTime - $departureTime;

		// Calculate real flight time
		$flightTime = $timezoneDifference < 0 ? $timeDifference - $timezoneDifferenceToSeconds : $timeDifference + $timezoneDifferenceToSeconds;

		// Total hours
		$hours = floor( $flightTime / 3600 );

		// Total minutes
		$minutes = floor( ( $flightTime / 60 ) % 60 );

		// Readable result
		$result = "$hours hours $minutes minutes";

		// Return result
		return $result;

	}

?>
