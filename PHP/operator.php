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
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "$a && $b = " . ($hasilAnd ? "Benar" : "Salah") . "<br>";
echo "$a || $b = " . ($hasilOr ? "Benar" : "Salah") . "<br>";
echo "!$a = " . ($hasilNotA ? "Benar" : "Salah") . "<br>";
echo "!$b = " . ($hasilNotB ? "Benar" : "Salah") . "<br><br>";
echo "<br>";

$a += $b;
echo "a += b → $a <br>";
$a -= $b;
echo "a -= b → $a <br>";
$a *= $b;
echo "a *= b → $a <br>";
$a /= $b;
echo "a /= b → $a <br>";
$a %= $b;
echo "a %= b → $a <br><br>";

$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Apakah $a identik dengan $b? : " . ($hasilIdentik ? "Benar" : "Salah") . "<br>";
echo "Apakah $a tidak identik dengan $b? : " . ($hasilTidakIdentik ? "Benar" : "Salah") . "<br><br>";

// soal 3.6
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi: $totalKursi <br>";
echo "Kursi terisi: $kursiTerisi <br>";
echo "Kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: " . number_format($persenKosong, 2) . "%<br>";
?>