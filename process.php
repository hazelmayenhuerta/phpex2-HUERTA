<?php

include 'calculate.php';
//number 1
if (isset($_POST['side_A']) . isset($_POST['side_B'])){
    $tri = new calculate;
    $tri->triangle($_POST['side_A'],$_POST['side_B']) ;
}
//number 2
else if (isset($_POST['binary'])){
    $binary_count = new calculate;
    $binary_count->binarycount($_POST ['binary']) ;
}
//number 3
else if (isset($_POST['pathA']) . isset($_POST['pathB'])){
    $obj = new calculate;
    $obj->pathparts($_POST ['pathA'],$_POST ['pathB']) ; 
}
//number 4
else if (isset($_POST ['num'])){
    $obj = new calculate;
    $obj->sastrynumber($_POST ['num']) ;
}

