<?php

namespace Autoload\Lib\Stringer;

class Stringer{
	

function stringToUrl($string){
	
$comAcentos = array('à' , 'á' , 'â' , 'ã' , 'ä' , 'å' , 'ç' ,
'è' , 'é' , 'ê' , 'ë' , 'ì' , 'í' , 'î' , 'ï' , 'ñ' , 'ò' , 'ó' , 'ô' , 'õ' , 'ö' , 'ù' , 'ü' ,
'ú' , 'ÿ' , 'À' , 'Á' , 'Â' , 'Ã' , 'Ä' , 'Å' , 'Ç' , 'È' , 'É' , 'Ê' , 'Ë' , 'Ì' , 'Í' ,
'Î' , 'Ï' , 'Ñ' , 'Ò' , 'Ó' , 'Ô' , 'Õ' , 'Ö' , 'O' , 'Ù' , 'Ü' , 'Ú' );

$semAcentos = array( 'a' , 'a' , 'a' , 'a' , 'a' , 'a' , 'c' ,
'e' , 'e' , 'e' , 'e' , 'i' , 'i' , 'i' , 'i' , 'n' , 'o' , 'o' , 'o' , 'o' , 'o' , 'u' , 'u' ,
'u' , 'y' , 'A' , 'A' , 'A' , 'A' , 'A' , 'A' , 'C' , 'E' , 'E' , 'E' , 'E' , 'I' , 'I' ,
'I' , 'I' , 'N' , 'O' , 'O' , 'O' , 'O' , 'O' , 'o' , 'U' , 'U' , 'U' );

$comPontuacoes = array( '/ /' , '.' , ',' , ':' , '!' , '#' , '*' ,
'+' , ';' , '?' , '|' , '$' , '"' , '%' , '&' , '(' , ')' , '[' , ']' , '@' , '=' , '”' , '“' );

#RemovendoAcentos
$string = str_replace( $comAcentos , $semAcentos , $string );

#Removendo Sinais de Pontuação
$stringNova = str_replace( $comPontuacoes , "" , $string );

#Removendo Espaço em Branco
$resultado = strtolower(preg_replace("/ /","-",$stringNova));

return $resultado;


}


}

?>