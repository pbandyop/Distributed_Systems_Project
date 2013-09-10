<?php
// Name - Payel Bandyopadhyay, Student Number:- 014174692

$input1=$_GET['input1'];

	if ($input1=='sin(x)')
      	{
        exec('echo \'set term png; set grid 4; set key left box; set xrange [-pi:pi]; set xlabel "x-axis" tc lt 8; set ylabel "y-axis" tc lt 8; set output "out.png"; plot sin(x)\'|gnuplot');
       	}


	else if ($input1=='cos(x)')
      	{
	exec('echo \'set term png; set grid 4; set key left box; set xrange [-pi:pi]; set xlabel "x-axis" tc lt 8; set ylabel "y-axis" tc lt 8; set output "out.png"; plot cos(x)\'|gnuplot');
	}
    
   $myfile = 'out.png';
   $fh = fopen($myfile, 'r');
   $theData = fread($fh, filesize($myfile));
   header('Content-Type: image/png');
   echo base64_encode ($theData);
   exec('rm out.png'); 
  
?>
