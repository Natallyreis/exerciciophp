<?php
// Declare uma variável que recebe a velocidade do carro
$velocidade = 45;

// Verifique a velocidade usando uma estrutura IF
if ($velocidade >= 41 && $velocidade <= 50) {
    echo " <br> O motorista está na velocidade correta.";
} elseif ($velocidade == 40) {
    echo " <br> Atenção: Você está na velocidade limite permitida.";
} elseif ($velocidade > 50) {
    echo " <br> Você está acima do limite de velocidade. Multa aplicada.";
} else {
    echo " <br> Você está abaixo do limite de velocidade permitida.";
}
?>
