<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B <br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br>";
} else {
    echo "Nilai huruf: D <br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa); 
array_terendah($nilaiSiswa);
array_terendah($nilaiSiswa);
array_tertinggi($nilaiSiswa);
array_tertinggi($nilaiSiswa);

$totalNilai = array_sum($nilaiSiswa);
$rataRata = $totalNilai / count($nilaiSiswa);

echo "Total nilai tanpa 2 nilai tertinggi & terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata <br>";
?>