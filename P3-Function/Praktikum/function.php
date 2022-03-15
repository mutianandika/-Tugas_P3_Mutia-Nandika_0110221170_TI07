<?php
function luas_lingkaran($_r) {
    $_phi = 3.14;
    $_luas = $_phi * $_r * $_r;
    return $_luas;
}

    echo "Luas Lingkaran : " .luas_lingkaran(89);
?>