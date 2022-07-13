<?php

class controladorBS{
    public function plantilla(){
		include "plantilla.php";
	}
	static public function mostrarProyectos($item,$valor)
	{
		$tabla = "proyectos";
		$respuesta = modeloPlantillaBS::modeloPlantillaBSDatos($tabla, $item, $valor);
		return	$respuesta;
	}
}