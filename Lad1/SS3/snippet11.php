<?php
function f1(){
    yield from f2();
    echo '<br>';
    yield "f1() 1";
    echo '<br>';
    yield "f1() 2";
    echo '<br>';
    yield from [3,4];
    echo '<br>';
    yield "f1() 3";
    echo '<br>';
    yield "f1() end";
    echo '<br>';
}

function f2(){
    yield "f2() 1";
    echo '<br>';
    yield "f2() 2";
    echo '<br>';
    yield "f2() 3";
    echo '<br>';
    yield "f2() end";
    echo '<br>';
}

$f = f1();
foreach ($f as $val){
    echo "$val";
}
?>