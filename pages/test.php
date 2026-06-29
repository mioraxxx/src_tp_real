<?php
include('../inc/functions.php');

$moyenne_salaire = get_moyenne_salaire();
echo $moyenne_salaire[0]['moyenne_salaire'];

?>