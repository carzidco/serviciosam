<?php

class database
{
	function connectDataBase()
	{
		$conexion = mysql_connect("localhost","servicr5","Sc2035$$") or die ("Fallo la conexion");
		mysql_select_db("servicr5_servam",$conexion) or die ("Fallo en seleccion de BD");
		return $conexion;
	}
}

?>