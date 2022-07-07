<?php


function rootsOfEquationSquare($a, $b, $c){ 
    echo '<h2>'.$a.'x<sup>2</sup>+'.$b.'x+'.$c.'=0</h2>';
    $d = $b*$b - 4*$a*$c;

    if($a!=0){    
        if($d>0){
            $x1 = (-$b+sqrt($d))/(2*$a);
            $x2 = (-$b-sqrt($d))/(2*$a);
            echo 'D = '.$d.'<br>x<sub>1</sub>='.$x1.' x<sub>2</sub>='.$x2;
        }else if($d==0){
            $x1 = -$b/(2*$a);
            echo 'D = '.$d.'<br>x<sub>1</sub>='.$x1;
        }else{
            echo 'D = '.$d.'<br>корней нет';
        }
    }else echo 'На ноль делить нельзя!';
}

rootsOfEquationSquare(5, 2, 4);
rootsOfEquationSquare(3, 7, 1);
rootsOfEquationSquare(1, 2, 1);
?>