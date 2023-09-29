<?php
// Crie um array com valores inteiros de 10 a 100 com incremento de 10
$valores = range(10, 100, 10);

// Aplique um loop no array
foreach ($valores as $valor) {
    // Verifique se o valor é igual a 30 ou 40
    if ($valor == 30 || $valor == 40) {
        // Pule para a próxima execução
        continue;
    }
    
    // Caso contrário, faça alguma operação com o valor (por exemplo, exibi-lo)
    echo "Valor: " . $valor . "<br>";
}
?>
