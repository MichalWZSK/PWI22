<?php

// typy zmiennych

// typ integer
$i1 = 69; // decimal
$i2 = 0x45; //hexa
$i3 = 0105; //oct
$i4 = 0b1000101;

echo "Decimal: " . $i1 . "<br />";
echo "Hex: $i2 <br />";
echo "Octal: " . $i3 . "<br />";
echo "Binary: " . $i4 . "<br />";

// typ boolean
$b1 = true;
$b2 = false;

//typ float
$f1 = 3.14;

//typ string
$s1 = 'Sample 1';
$s2 = "Sample 2";
//heredoc
$s3 = <<<S3
    Sample 3
S3;

//nowdoc
$s4 = <<<'S4'
    Sample 4
S4;

//typ null
$n1 = null;
$n2 = NULL;

//typ tablicowy
$arr1 = [
    'gcfshbs',
    133,
    3.14
];

$arr2 = array('gcfshbs', 133, 3.14);

// tablica asocjacyjna
$assoc = [
    'key1' => 6565,
    'k2' => "here",
    3 => 3.14
];

// tablica tablic
$arrOfArr = [
    [            
        'gafgaa',
            2,             
             4.54
    ]
    [
        656,
        4444
    ]

//typ obiektowy
$o1 = new stdClass();
$o1 ->attr1 = 3123;

//funkcje

function f1() {
    echo "hoho";
}

f1();

function f2(): void
{
    echo "hihi";
}    

f2();

function f3($a1, $a2) {
    echo $a1 + $a2;
}

function f4(int $a1, int $a2): void {
    echo $a1 + @a2;
}

function f5() {
    return 'Hello world';
}

echo f5();

function f6(): string {
    return 'Hellow world';
}

