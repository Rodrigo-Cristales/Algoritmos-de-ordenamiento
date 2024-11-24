<?php

    function InsersionSort($array){
        $n = count($array); 

            for($i = 1; $i < $n;  $i++ ){
                $llave = $array[$i];
                $j = $i - 1;

                    while($j >= 0 && strcasecmp($array[$j], $llave) > 0){
                            $array[$j + 1] = $array[$j];
                            $j--;
                    }
                    $array[$j + 1] = $llave;
            }
            return $array;
    }

    $nombres = ["Rodrigo", "Raul", "Ivan", "Alberto", "Xiomara", "Stacy", "Ashlee"];

    echo "Nombres sin ordernar alfabeticamente : \n";
    print_r($nombres);    

    $NombresOrdenados = InsersionSort($nombres);

    echo "Nombres ordenados alfabeticamente: \n";
    print_r($NombresOrdenados);
?>