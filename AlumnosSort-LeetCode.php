class Solution {

/**
 * @param Integer[] $heights
 * @return Integer
 */


function heightChecker($heights) {
    $n = count($heights);
    $expected = $heights; 
    $comparaciones = 0;
    // Hacemos uso de sort - BubbleSort
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($expected[$j] > $expected[$j + 1]) {
                // Realizamos el intercambio de valores
                $temporal = $expected[$j];
                $expected[$j] = $expected[$j + 1];
                $expected[$j + 1] = $temporal;
            }
            $comparaciones++;
        }
    }
    
    $contador = 0; 

    for ($i = 0; $i < $n; $i++) {
        if ($heights[$i] != $expected[$i]) {
            $contador++;
        }
    }
    return $contador;
}
}
