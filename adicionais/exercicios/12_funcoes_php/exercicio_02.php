<?php

/* 
 * Declare uma variável com o seu nome completo, e utilizando a string str_replace, altere todas as vogais por @.
 */

$arrVogais = array("a", "e", "i", "o", "u");

$strNome = "Gunnar Correa";
echo $strNome . "<br/>";

$strNome = str_ireplace($arrVogais, "@", $strNome);
echo $strNome . "<br/>";