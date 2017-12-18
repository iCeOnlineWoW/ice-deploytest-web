<html>
<head>
	<meta charset="utf-8" />
	<title>iCe Online: web deployment test project</title>
</head>

<body>
	<?php
	
	require __DIR__.'/vendor/autoload.php';
	
	// just to test composer build step
	use MathPHP\Probability\Combinatorics;
	$perm = Combinatorics::permutations(5);
	
	echo "This is test project used for testing Anveena web deployment. Date: ".date("Y-m-d H:i:s")."<br/>";
	echo "5! = ".$perm;
	?>
</body>

</html>