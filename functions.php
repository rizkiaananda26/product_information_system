<?php

function hitungTotalNilaiStok($harga, $stok)
{
    return $harga * $stok;
}

function cekStok($stok)
{
    if ($stok < 3) {
        return "kritis";
    } else {
        return "aman";
    }
}

?>