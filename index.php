<?php 

	
	$hrini = date('H:i:s', strtotime("07:32:48"));
	$hrfim = date('H:i:s', strtotime("16:47:15"));

	$hora01 = explode(":", $hrini);
	$hora02 = explode(":", $hrfim);

	$hr01 = ($hora01[0] * 3600) + ($hora01[1] * 60) + $hora01[2];
	$hr02 = ($hora02[0] * 3600) + ($hora02[1] * 60) + $hora02[2];

	$total = $hr02 - $hr01;

	$hr = floor($total/3600);
	$total = $total - ($hr*3600);

	$min = floor($total/60);
	$total = $total-($min*60);

	$seg = $total;

	$diff = $hr.":".$min.":".$seg;

	echo "Hora Inicial: ".$hrini."<br>";

	echo "+<br>";

	echo "Hora Final: ".$hrfim."<br>";

	echo "-----------------------------<br>";
	echo "Resultado: ".$diff."<br>";


 ?>