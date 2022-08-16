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

    function getAllArrayGroups($groupsCount){
        $this->newArrays($groupsCount);
        for($i= 0;$i < count($this->arrays); $i++){
            array_push($this->arrays[$this->findSmallestArraysElementID()],$this->arrays[$i]);
        }
        return $this->arrays;
    }

    function printArrays(){
        foreach($this->arrays as $item){
            print_r($item);
            print_r(" Gauta suma: ");
            echo array_sum($item);
        }
    }
}

$data = [1, 2, 4, 7, 1, 6, 2, 8];
$groupsCount = 3;
$classObject = new ArrayControls($data);
$classObject->getAllArrayGroups($groupsCount);
$classObject->printArrays();

?>