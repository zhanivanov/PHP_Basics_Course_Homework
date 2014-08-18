<?php
	$value = (object)[2,34];
	if(is_numeric($value)){
		var_dump($value);
	}
	else{
		echo gettype($value);
	}
?>