<?php
//declarando variáveis
$num = 4;
$limite = 30;
// enquanto número for menor que 38
while($num < $limite) {

// Exibir os números
 echo "Executando o loop $num <br>";

// Se o número for idêntico a 24
if($num === 24) {
    echo "Parando o loop👋";
break;
}
$num += 2;

}
?>