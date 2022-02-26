<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php simple</title>
</head>
<body>
<?php

	
	$myvar = 'variable';
	$num1 = 10;
	$num2 = 25;

	$name = 'Elton';
	$name2 = 'anonymous';
	// echo 'Hey,' .  $name;
	// $loggdedIn = false;
	// if ($loggdedIn == true) {
	// 	echo "you are loggedd in as " .$name;
	// } else{
	// 	echo 'please log in first ' .$name2;
	// }

	$people = array('Alice', "bob", 'elton', 'eric', 'sophia');
	// print_r($people);
	// echo $people[3];
	foreach($people as $person){
		echo $person. ' ';
	}

?> 

<!-- <form action='process.php' method='post'>
	Enter Name: <input name ='name'type='text'>
	<input type='submit'>

</form> -->
</body>
</html>