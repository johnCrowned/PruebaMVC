<?php

include('../modelo/inicioModelo.php');
$dato = new llamado;

if (isset($_GET['acction'])) {
	
	if ($_GET['acction'] == "CONSULTAUSUARIOS") {
		echo $dato->llamadoDB();
		}
}


?>