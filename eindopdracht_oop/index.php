<?php

include_once('classes/cilinder.class.php');
include_once('classes/vierkant.class.php');
include_once('classes/driehoek.class.php');

$vierkant = new Vierkant(12);
$cilinder = new Cilinder(6, 9);
$driehoek = new Driehoek(4, 2);

echo "Oppervlakte vierkant: " . $vierkant->berekenOppervlakte();
echo "<br>Oppervlakte cilinder: " . $cilinder->berekenOppervlakte();
echo "<br>Oppervlakte driehoek: " . $driehoek->berekenOppervlakte();

?>