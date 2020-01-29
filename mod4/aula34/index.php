<h1>SWITCH</h1>
<hr>
<?php
	$x = 10;
	switch($x){
		case 0:
		case 1:
		case 2:
			echo "O x vale zero, um ou dois";
			break;

		default:
			echo "Lamento. O x não é reconhecido!";
			break;
	}
?>
