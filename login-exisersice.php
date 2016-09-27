<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Filter input example</h1>
<p>Requist: <a href="<?= $_SERVER['PHP_SELF'] ?>?name=Gabriel&email=gabriel@gabrielkristensen.com&age=28">name, email, and age parmaeters</a></p>
<?php
	$n = filter_input(INPUT_GET, 'name', FILTER_VALIDATE_INT) or die('Missing/illegal name parameter.');
	$a = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT) or die('Missing/illegal age parameter.');
	$e = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_INT) or die('Missing/illegal email parameter.');
	
	echo 'n='.$n.'<br>'.PHP_EOL;
	echo 'a='.$a.'<br>'.PHP_EOL;
	echo 'e='.$e.'<br>'.PHP_EOL;
	
	//$sql = 'insert into persons (name, email, age) values ('Gabriel', 'gabriel@gabrielkristensen.com', 28)';
	//$sql = 'INSERT INTO persons (name, email, age) VALUES ("'.?.'", "'.?.'", '.?.')';
	//echo $sql;
	
	require_once 'databace-requier-once.php';
	$stmt = $link->perpare($sql);
	$stmt->bind_param('ssi', $n, $e, $a);
	$stmt->execute ();
?>
</body>
</html>