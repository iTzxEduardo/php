<?php

function media($a ,$b, $c, $d) {

	$retorno = ($a + $b + $c + $d) / 4;
	
	return $retorno;
 }

 $media = media(3,2,1,0);

 if($media >= 7){
 	echo "Aprovado - media: " . $media;
 } else if($media >= 5){
 			echo "Exame - media: " . $media;
 } else {
 		echo "Reprovado - media: " . $media;
 }

?>