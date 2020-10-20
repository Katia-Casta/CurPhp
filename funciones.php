<?php 

function mifuncion(){
	//mostrar un nombre
	$r=array(1);
	return $r;
}

	//funciones escalares

	function mifuncion2($valorA,$valorB,$opcion){
		switch ($opcion) {
			case 'suma':
				echo $valorA + $valorB;
				break;
			case 'resta':
				echo $valorA - $valorB;
				break;
			case 'multiplicacion':
				echo $valorA * $valorB;
				break;
			case 'division':
				echo $valorA / $valorB;
				break;
			
			default:
				# code...
				break;
		}

	}

	mifuncion2(5,10,'suma');

 ?>