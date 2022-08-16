<?php
require_once('./Services/ArrayControls.php');
$data = [1, 2, 4, 7, 1, 6, 2, 8];
$groupsCount = 3;
$classObject = new ArrayControls($data);
$classObject->getAllArrayGroups($groupsCount);
$classObject->printArrays();
?>