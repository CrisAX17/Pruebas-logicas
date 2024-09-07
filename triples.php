<?php
function puntos($a, $b) {
    $puntosa = 0;
    $puntosb = 0;

    for($i = 0; $i < count($a); $i++){
        if($a[$i] > $b[$i]){
            $puntosa++;
    } elseif ($a[$i] < $b[$i]) {
            $puntosb++;
    }
}

    return [$puntosa, $puntosb];

}

$a = [45, 22, 3];
$b = [3, 55, 100];

$result = puntos($a, $b);
echo "Los puntos de a y b son: [" . implode(",", $result) . "]\n";
?>