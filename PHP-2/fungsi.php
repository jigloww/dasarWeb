<?php
function hitungUmur($thn_Lahir, $thn_Sekarang) {
    $umur = $thn_Sekarang - $thn_Lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $nama. ", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia ". hitungUmur(2005, 2025) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
    perkenalan("Tanggaq");

?>
