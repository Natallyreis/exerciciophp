<?php
// Declare uma variável que recebe a velocidade do carro
$velocidade = 45;

// Verifique a velocidade usando uma estrutura IF
if ($velocidade >= 41 && $velocidade <= 50) {
    echo "O motorista está na velocidade correta.";
} elseif ($velocidade == 40) {
    echo "Atenção: Você está na velocidade limite permitida.";
} elseif ($velocidade > 50) {
    echo "Você está acima do limite de velocidade. Multa aplicada.";
} else {
    echo "Você está abaixo do limite de velocidade permitida.";
}
?>
