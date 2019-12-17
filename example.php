<?php
$Symp_Array=[0,4,5,51,52,53,54,55];
$command=exec('python Model.py ' . escapeshellarg(json_encode($Symp_Array)) .'2<&1',$output);
echo "<pre>";
print_r($output);
echo "</pre>";
?>