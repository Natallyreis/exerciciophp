<?php
// Inicializa o contador como 4
$contador = 4;

// Inicia o loop que vai até o número 30
while ($contador <= 30) {
    // Faça incrementos de 2 em 2 no contador
    $contador += 2;

    // Verifica se o contador chegou a 24 e, se sim, utiliza o break para parar o loop
    if ($contador == 24) {
        break;
    }
}

// Após o loop, você pode exibir o valor final do contador
echo "O loop parou no número: " . $contador;
?>
