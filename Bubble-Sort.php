<?php


    function bubleSort($array){

        $contenedor = count($array);


        for($i = 0; $i < $contenedor; $i++){

            $estado = false;

            for($j = 0; $j < $contenedor -$i - 1; $j++){
                
                if($array[$j] < $array[$j+1]){
                    $cont = $array[$j];
                    $array [$j] = $array[$j + 1];
                    $array [$j + 1] = $cont;
                    $estado = true;
                }
            }
            if(!$estado){
                break;
            }
        }
        return $array;
    }

    $lista = [1,2,3,5,10,12,-15,-10,-2];

    echo "Lista sin ordenar por el Bubble sort :\n";
    print_r($lista);


    $list = bubleSort($lista);
    echo "Lista ordenada con el buble sort decendente : \n";
    print_r($list);

?>