<?php
	$andol = $_POST['andol'];
	$aspirin = $_POST['aspirin'];
	$vitaminC = $_POST['vitaminC'];
	$ljekarna = $_POST['ljekarna'];
	$ukupno = $andol + $aspirin + $vitaminC;
	?>
	
	<html><head><title>Online ljekarna</title></head>
	<body>
	<h1>Ljekarna - narudžba</h1><h2>Fiskalni račun</h2>
	
<?php
echo "<p>Roba naručena u :";
echo " " . date("H:i, jS F") . "<br>";
echo "</p>";
echo "Ukupno lijekova naruceno: $ukupno". "<br>";
echo "Naručili ste : $andol andola, $aspirin aspirina i $vitaminC vitamina C". "<br>";
echo "Razlog zašto ste nas odabrali: $ljekarna."."<br>";

define('AndolCijena',20);
define('AspirinCijena',30);
define('VitCCijena',40);
$ukupna_cijena = $andol + AndolCijena + $aspirin + AspirinCijena + $vitaminC + VitCCijena;
echo "Ukupna cijena: $ukupna_cijena". "kn<br>";
$ukupna_cijenaSaPDV = $ukupna_cijena * 1.25;
echo "Ukupna cijena sa PDVom: $ukupna_cijenaSaPDV"."kn<br>";

if ($ljekarna == "Vi ste redovan kupac"){
	echo "Hvala! <br>";
	}else{
		echo "Dodite nam opet!";
	}
?>