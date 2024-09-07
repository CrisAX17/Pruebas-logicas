<?php
function diferencias($matriz) {
    $n = count($matriz);

    $diagonal1 = 0;
    $diagonal2 = 0;

    for ($i = 0; $i < $n; $i++){
        $diagonal1 += $matriz[$i][$i];
        $diagonal2 += $matriz[$i][$n - 1 - $i];
    }

    $dif = abs($diagonal1 - $diagonal2);

    return $dif;

}

    $matriz = [
        [11, 2, 4],
        [4, 5, 6],
        [10, 8, -12]
    ];

    $result = diferencias($matriz);
    echo "La diferencia absoluta entre las sumas diagonales es: {$result}";

?>