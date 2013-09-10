<?php

//Name- Payel Bandyopadhyay,  Student Number - 014174692 

$arg1=$_GET['arg1'];
$arg2=$_GET['arg2'];
$op=$_GET['op'];


if (urlencode($op)=="+"){
		echo $arg1."+".$arg2." = ".($arg1+$arg2);
	}
	else if ($op=="-"){
		echo $arg1."-".$arg2." = ".($arg1-$arg2);
	}
	else if ($op=="/"){
		echo $arg1."/".$arg2." = ".sprintf("%0.15f", ($arg1/$arg2));
	}
	else if ($op=='*'){
		echo $arg1."*".$arg2." = ".sprintf("%0.15f", ($arg1*$arg2));
	}

?>
