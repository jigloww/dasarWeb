<?php
function perkenalan($nama, $salam) {
    echo $salam . ", ";
    echo "Perkenalkan nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    echo "<br>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Tanggaq";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);
?>
