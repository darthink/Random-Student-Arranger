
<?php

/* Shift And Randomize */


	$file = fopen("lab02students.csv","r");
	$students = array();
	$i = 0;

	while(($line = fgetcsv($file)) !== FALSE) {

		$students[$i] = implode(" ", $line);
		$i++;

	}

	fclose($file);
	

	$s1 = array();
	$s2 = array();

	for ($i=0; $i<=count($students); $i++) { 

		if ($i % 2 == 0 && isset($students[$i])) {
			array_push($s1, $students[$i]);
		}

		elseif ($i % 2 !== 0 && isset($students[$i])) {
			array_push($s2, $students[$i]);
		}

	}


	$temp = $s1[0];
	array_shift($s1);
	array_push($s1, $temp);

	$newGroups = array();

	for ($i=0; $i<=count($s1); $i++) { 

		if ((isset($s1[$i])) && (isset($s2[$i]))) {
			$newGroups[] = $s1[$i].'<br>'.$s2[$i];
		}

		elseif (isset($s1[$i])) {
			$newGroups[] = $s1[$i];
		}

	}


	shuffle($newGroups);
	$file = fopen('../2300/lab02studentsPublic.csv','w');
	$csvListWritePublic = array();

	for ($i=0; $i<count($newGroups); $i++) { 

		$csvListWritePublic = array($newGroups[$i]);
		fputcsv($file, $csvListWritePublic);

	}
	
	fclose($file);


	$csvList = array();

	for ($i=0; $i<=count($s1); $i++) { 

		if (isset($s1[$i])) {
			$csvList[] = $s1[$i];
		}

		if (isset($s2[$i])) {
			$csvList[] = $s2[$i];
		}
	}


	$file = fopen('lab02students.csv','w');
	$csvListWrite = array();

	for ($i=0; $i<count($csvList); $i++) { 

		$csvListWrite = array($csvList[$i]);
		fputcsv($file, $csvListWrite);

	}

	fclose($file);

?>