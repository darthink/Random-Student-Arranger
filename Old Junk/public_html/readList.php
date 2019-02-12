
<?php
	
	/* Write groups to page */
	function readList($filePublic) {

	$file = fopen("$filePublic","r");
	$students = array();
	$i = 0;

	while(($line = fgetcsv($file)) !== FALSE) {

		$students[$i] = implode(" ", $line);
		$i++;

	}

	fclose($file);

	$num = 1;

	foreach ($students as $groups) {
		echo '<div class="group">'.$groups.'</div><div class="groupNumber">'.$num.'</div>';
		$num += 1;
	}

}
?>