<?php

class ArrayControls
{
    function __construct($array){
        $this->array = $array;
    }

    function newArrays($groups){
        $arrays = array();
        for ($array=0;$array<$groups;$array++){
            array_push($arrays, array());
        }
        return $this->arrays = $arrays;
    }
}


$data = [1, 2, 4, 7, 1, 6, 2, 8];
$groups = 3;
?>