<?php 

	$arreglo=array();
	$arreglo[0]="Alexander";
	$arreglo[1]=4;
	$arreglo[2]='Leyte ';
	$arreglo[3]='Castañeda';

	//podemos llenar el arreglo desde el inicio o por posicion

	$arreglo2=array('jose',5,6,7,8,9,19);

	for ($i=0; $i <count($arreglo2); $i++) { 
		echo $arreglo2[$i];
		echo "<br>";

		if ($arreglo2[$i]=='Castañeda') {
			echo "Felicidades encontraste el dato";
		}
	}


	//var_dump($arreglo);


 ?>