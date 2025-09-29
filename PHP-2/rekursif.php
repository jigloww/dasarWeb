<?php
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>

<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
            "nama" => "Wisata",
            "subMenu" => [
                [
                    "nama" => "Pantai"
                ],
                [
                    "nama" => "Gunung"
                ]
            ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
        ]
                ],
                [
                    "nama" => "Tentang"
                ], 
                [
                    "nama" => "Kontak"
                ],
            ];
            
function tampilMenu($menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>" . $item["nama"];
        if (isset($item["subMenu"])) {
            tampilMenu($item["subMenu"]);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilMenu($menu);
?>
