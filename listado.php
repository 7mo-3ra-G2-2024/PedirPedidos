<?php 
	require 'conexion.php';// agrega el codigo de conexion
	$consulta=$conexion->prepare("SELECT * FROM ingredientes");// prepara la consulta SQL
	$consulta->execute();// ejecuta la consulta SQL
	$datos=$consulta->fetchAll(PDO::FETCH_ASSOC);// genera un diccionario con datos de PACIENTE 

	echo "<center><table border='2'> <tr> <th>Id de ingrediente</th> <th>ingrediente</th> <th>cantidad</th> <th>Accion</th></tr>";
	$n=1;
	foreach ($datos as $elemento) {
		echo "</td> <td>".$elemento['idIngrediente']. "</td> <td>".$elemento['nombre']. "</td> <td>".$elemento['cantidad']."</td>";
        echo '<td><a style="font-size:80%;" href="pedir.php?ubi_ingrediente='.$elemento['idIngrediente'].'">SOLICITAR MAS</a></td> </tr>';
		$n++;
	}


	echo "</table></center>";
	echo "<p><a href='Vehiculos.html'>Volver</a>";

?>