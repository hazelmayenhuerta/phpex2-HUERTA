<?php

class calculate{
//number 1
    function triangle ($side_A, $side_B)
    {
        $maxLength = $side_A + $side_B - 1;
        echo '<h3>' . 'Answer: ' . $maxLength.'</h3>';
    }
//number 2
    function binarycount($binary)
    { 
        $count = 0;
        while($binary)
        {
            $count += ($binary & 1);
            $binary = $binary >> 1;
        }

        echo '<h3>' . 'Answer: ' . $count . '</h3>';
    }
//number 3
    function pathparts ($pathA, $pathB )
    {
        $output = str_replace('/', '', $pathA);
        $output .= "/" . str_replace('/', '', $pathB);
        echo '<h3>' . 'Output: ' . $output . '</h3>';
    }
//number 4
    function sastrynumber ($num)
    {
        $conc = $num . $num+1;
        $check = 0;
        for ($i = 1; $i * $i <= $conc; $i++) {
            if (($conc % $i == 0) && ($conc / $i == $i)) {
                $check = 1;
                echo '<h3>' . "Output: " . $num . " ➡ ". $conc . " ➡ ". "TRUE (" . $num . " is a perfect square)" . '</h3>';
        }
    }
        if($check == 0){
        echo '<h3>' . "Output: " . $num . " ➡ ". $conc . " ➡ ". "FALSE (" . $num . " is not a perfect square)" . '</h3>';
        }
    }
}