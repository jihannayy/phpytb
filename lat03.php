<?php

function belajar(){
    echo "saya belajar PHP";
}

function luasPersegi($p =5, $1 = 3){
    $luas = $p * $1;
    echo $luas;

}

function luas($p = 5, $1 = 3){
    $class = $p * $1;
    return $luas;
}

function output(){
    return "belajar function";
}

echo luas(100,3) * 5;
?>