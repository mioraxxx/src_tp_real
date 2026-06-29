<?php
include('../inc/functions.php'); 
$pourcentage = $_POST['pourcentage'];
modifier_salaire_de_toutlemonde($pourcentage);
header('Location:augmentation_salaire.php');
?>