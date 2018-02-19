<?php
	function centuryFromYear($year) {
	    $century = intdiv($year, 100);
	    if (fmod($year, 100) > 0) {
	        $century++;
	    }
	    return $century;
	}
?>