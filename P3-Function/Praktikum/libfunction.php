<?php
// Function Segitiga 
function segitiga($a,$t) {
    $luas = 1/2 * $a * $t;
    return $luas;
}

// Function Luas Persegi Panjang 
function persegi_panjang ($p,$l) {
    $rumus = $p * $l;
    return $rumus;
}

// Function Volume Kubus 
function kubus ($sisi) {
    $volume = $sisi * $sisi * $sisi;
    return $volume;
}

// Function Volume Balok 
function balok ($p,$l,$t) {
    $v = $p * $l * $t;
    return $v;
}

?>