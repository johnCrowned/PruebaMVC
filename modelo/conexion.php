<?php
$db = new mysqli ('localhost','root','','prueba');
$acentos = $db -> query("SET NAMES 'utf8'");
if($db->connect_error > 0){
 
 die('Error en la conexion[' .$db->connect_error.']');
}

?>