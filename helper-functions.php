<?php
// function to sort Multidimensional arrays by column, typical case where you will have to work with database queries result
/* $result_db = Array ( 
                    [0] => Array ( [num_demanda] => AI00000310 [cod_articulo] => S310127605 [nombre_articulo] => Proteccion triangular izquierd [unidades] => 2.00 [unidades_entrada] => 2.00 [cod_proveedor] => 145 [fecha_demanda] => 2018-07-10 [fecha_entrega] => 2018-07-10 [servido] => 3 [nombre] => empresa ) 
                    [1] => Array ( [num_demanda] => AI00000310 [cod_articulo] => S3803594 [nombre_articulo] => Reductor eje corto SM [unidades] => 1.00 [unidades_entrada] => 1.00 [cod_proveedor] => 145 [fecha_demanda] => 2018-07-10 [fecha_entrega] => 2018-07-10 [servido] => 3 [nombre] => empresa ) 
                );
*/
function orderMultiDimensionalArray($toOrderArray,$field,$inverse=false){

    $position = array();
    $newRow = array();

    foreach($toOrderArray as $key => $row){
        $position[$key] = $row[$field];
        $newRow[$key] = $row;
    }

    if($inverse){
        arsort($position);
    }else{
        asort($position);
    }

    $returnArray = array();
    
    foreach($position as $key => $pos){
        $returnArray[] = $newRow[$key];
    }

    return $returnArray;
}

?>