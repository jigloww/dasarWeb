<?php
function hitungUmur($thn_Lahir, $thn_Sekarang) {
    $umur = $thn_Sekarang - $thn_Lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2005, 2025) . " tahun.";
?>
