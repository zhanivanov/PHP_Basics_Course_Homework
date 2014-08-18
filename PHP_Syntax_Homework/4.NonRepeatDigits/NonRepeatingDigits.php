<?php
	$input = 145;
	$counter = 0;
	
	
	for($i = 1;$i<=9;$i++){
		for($j = 0;$j<=9;$j++){
			for($k = 0;$k<=9;$k++){
				$numStr = $i.$j.$k;
				$number = (int)$numStr;
				if($number>$input){
					break;
				}
				
				$firstDigit = floor($number/100);
				$secondDigit = floor(($number/10)%10);
				$thirdDigit = floor($number%10);
				
				if($firstDigit != $secondDigit && $firstDigit != $thirdDigit){
					if($secondDigit != $thirdDigit){
						echo $firstDigit.$secondDigit.$thirdDigit.' ';
						$counter++;
					}
					
				}
			}
		}
	}
	if($counter==0){
		echo 'no';
	}
?>