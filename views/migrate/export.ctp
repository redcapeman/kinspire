<?php

foreach ($data as $key => $value) {
	$table[] = $key;
}

foreach ($table as $key => $value) {
	$table = strtolower($value);
	echo '<'. $table .'>' . "\n";
	foreach ($data[$value] as $key => $value) {
		foreach ($value as $key => $value){
			echo '<'. $key .'>'. $value .'</'. $key .'>' . "\n";
		}
	}
	echo '</'. $table .'>' . "\n";
}
?>