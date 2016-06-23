<?php

	$align_logo = '1';
?>

<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="robots" content="index,follow">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>HUB | History</title>

	<link href="css/1140.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
	

</head>
<body>
	<div class="container12">	

		<?php include "nav.php"; ?> 


	
	</div>

	<div class="sub-menu">
		<div class="container12">
			<form action="" method="POST">
				<div class="column3">
					<input type="text" class="small-fld" name="teacher" value="" placeholder="Teacher">
				</div>
				<div class="column3">
					<input type="text" class="small-fld" name="teacher" value="" placeholder="Class">
				</div>
				<div class="column4">
					<input type="submit" class="small-btn" name="search" value="Search">				
				</div>
			</form>	
		</div>	
	</div>

	<div class="container12">

		<h1 id="res" class="main-titles"><strong>Essay Topics</strong></h1>

		<div class="row">
			<div class="column12">
				<div class="essay-container">
					<table class="results-container">
						<tr>
							<th>Chapter</th>
							<th>Title</th>
							<th>Status</th>
							<th>Grade</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Civil War</td>
							<td>Research</td>
							<td>-</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Great Depression</td>
							<td>Completed</td>
							<td>95%</td>
						</tr>
					</table>
				</div>			
				
				<div class="select-container">				
					<button type="button">Let's Write!</button>
				</div>
			
		</div>
		
	</div>

</body>
</html>