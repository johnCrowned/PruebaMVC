<?php

class llamado 
{
	
	function llamadoDB()
	{
		include('../modelo/conexion.php');
		$sql="SELECT * FROM vtiger_users";
    	if(!$result = @$db->query($sql)){
        die('Error en el nombre de los campos!!['.$db->error.']');
        
        }
        $codigo_tabla = "<table>
        <tr>
        <td>ID USUARIO</td><td>NOMBRE</td><td>APELLIDO</td><td>SEGUNDO APELLIDO</td>
        </tr>"; 
            while($row=$result->fetch_assoc()){
            
            $id= stripslashes($row["id"]);
            $nombre= stripslashes($row["user_name"]);
            $apellido= stripslashes($row["first_name"]);
            $segundoApellido= stripslashes($row["last_name"]);
           
            

           $codigo_tabla.= 
            "<tr>
        <td>".$id."</td>
        <td>".$nombre."</td>
        <td>".$apellido."</td>
        <td>".$segundoApellido."</td>
        </tr>";
       
           

    }

    $codigo_tabla .="</table>";
	return $codigo_tabla;
	}
	
}

?>