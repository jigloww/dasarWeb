<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil kurang: {$hasilKurang} <br>";
echo "Hasil kali: {$hasilKali} <br>";
echo "Hasil bagi: {$hasilBagi} <br>";
echo "Sisa bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah $a sama dengan $b? : " . ($hasilSama ? "Benar" : "Salah") . "<br>";
echo "Apakah $a tidak sama dengan $b? : " . ($hasilTidakSama ? "Benar" : "Salah") . "<br>";
echo "Apakah $a lebih kecil dari $b? : " . ($hasilLebihKecil ? "Benar" : "Salah") . "<br>";
echo "Apakah $a lebih besar dari $b? : " . ($hasilLebihBesar ? "Benar" : "Salah") . "<br>";
echo "Apakah $a lebih kecil sama dengan $b? : " . ($hasilLebihKecilSama ? "Benar" : "Salah") . "<br>";
echo "Apakah $a lebih besar sama dengan $b? : " . ($hasilLebihBesarSama ? "Benar" : "Salah") . "<br><br>";
?>