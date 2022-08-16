<?php
declare(strict_types=1);
class ArrayControls
{
    public $sortedArray;
    public $arrays;

    function __construct($array){
        $this->array = $array;
        $this->sortedArray = $array;
        rsort($this->sortedArray);
    }

    private function newArrays($groupsCount): array{
        $arrays = array();
        for ($array=0;$array<$groupsCount;$array++){
            array_push($arrays, array());
        }
        return $this->arrays = $arrays;
    }

    private function findSmallestArraysElementID(): int{
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

    public function getAllArrayGroups($groupsCount): array{
        $this->newArrays($groupsCount);
        for($i= 0;$i < count($this->sortedArray); $i++){
            array_push($this->arrays[$this->findSmallestArraysElementID()],$this->sortedArray[$i]);
        }
        return $this->arrays;
    }

    public function printArrays(){
        foreach($this->arrays as $item){
            print_r($item);
            print_r(" Gauta suma: ");
            echo array_sum($item);
            print_r(" \n");
        }
    }
}