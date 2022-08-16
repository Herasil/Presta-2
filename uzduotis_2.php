<?php

class ArrayControls
{
    function __construct($array){
        $this->array = $array;
    }

    function newArrays($groupsCount): array{
        $arrays = array();
        for ($array=0;$array<$groupsCount;$array++){
            array_push($arrays, array());
        }
        return $this->arrays = $arrays;
    }

    function findSmallestArraysElementID(): int{
        $arrayElementID = 0;
        $smallestSum = array_sum($this->arrays[$arrayElementID]);
        for ($i = 1; $i < count($this->arrays); $i++){
            $currentSum = array_sum($this->arrays[$i]);
            if($currentSum < $smallestSum) {
                $smallestSum = $currentSum;
                $arrayElementID = $i;
            }
        }
        return $arrayElementID;
    }
}

$data = [1, 2, 4, 7, 1, 6, 2, 8];
$groupsCount = 3;
?>