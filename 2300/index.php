<?php include 'readList.php' ?>

<!DOCTYPE html>

<html>


<head>

	<title>ITIS 2300 - Lab Groups</title>

	<link rel="stylesheet" href="style.css">

</head>


<body>
	

	<div class="title">

		<h1>ITIS 2300</h1>
		<h2>Web-Based Application Development</h2>

	</div>


	<div class="groupContainer">


		<!-- Start Student Lab 01 -->
		<div class="groupBox">

			<h3>Lab Section 01<br>(12:30pm)</h3>

			<?php readList("lab01studentsPublic.csv"); ?>

		<div class="clearfix"></div>
		</div>
		<!-- End Student Lab 01 -->


		<!-- Start Student Lab 02 -->
		<div class="groupBox">

			<h3>Lab Section 02<br>(3:30pm)</h3>
			
			<?php readList("lab02studentsPublic.csv"); ?>

		<div class="clearfix"></div>
		</div>
		<!-- End Student Lab 02 -->
		

	<div class="clearfix"></div>
	</div>


</body>


</html>