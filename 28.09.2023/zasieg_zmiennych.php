<?php

$variable = 'aaaa';

echo $variable . "<br />";

$variable = 'bbbb';

echo $variable . "<br />";

function a() {
    $variable = 'ccccccccccc';
}

a();

echo $variable . "<br />";

function b() {
    global $variable;
    $variable = 'dddddddd';

}

b();

echo $variable . "<br />";

function c() {
    global $new;
    $new = 'khorne';
}

c();

global $new;

echo $new . "<br />";

include ("cos.php");

global $otherVariable;

echo $otherVariable . "<br />";

d();

$a = 5;

echo $a . "<br />";

function e($a) {
    $a = 10;
}

e($a);

echo $a . "<br />";

function f(&$a) {
    $a = 10;
}

f($a);

echo $a . "<br />";