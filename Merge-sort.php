<?php
    function MergeSort($array){
        if(count($array) <= 1){
            return $array;
        }      
        $mitad = floor(count($array)/ 2);
        $right = MergeSort(array_slice($array, 0, $mitad));
        $left = MergeSort(array_slice($array, $mitad));

        return merge($left, $right);
    }
    function merge($left, $right){
        $result = [];
        while(count($left) > 0 && count($right)> 0){
            if (strcasecmp($left[0], $right[0]) <= 0) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right); 
            }
        }
        return array_merge($result, $left, $right);
    }

    $lista  = ["Banana", "apple", "queso", "naranja", "tiempo", "bicicleta", "casa", "granja"];

    echo "Lista no ordenada:\n";
    print_r($lista);

    $Ordenada =  MergeSort($lista);
    echo "Lista ordenada con el MegerSort : \n";

    print_r($Ordenada);
?>