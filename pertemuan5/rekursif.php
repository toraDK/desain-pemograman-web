<?php
// function tampilkanHaloDunia() {
//     echo "Halo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

// function tampilkanAngka(int $jumlah, int $indeks = 1) {
//     echo "Perulangan ke-$indeks <br>";

//     // Panggil diri sendiri selama $indeks <= $jumlah
//     if ($indeks < $jumlah) {
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }

// tampilkanAngka(20);

    $menu = [
        ["nama" => "Beranda"],
        [
            "nama" => "Berita",
            "subMenu" => [
                ["nama" => "Wisata",
                    "subMenu" => [
                        ["nama" => "Pantai"],
                        ["nama" => "Gunung"]
                    ]
                ],
                ["nama" => "Kuliner"],
                ["nama" => "Hiburan"]
            ]
        ],
        ["nama" => "Tentang"],
        ["nama" => "Kontak"]
    
    ];

    // function tampilkanMenuBertingkat(array $menu) {
    //     echo "<ul>";
    
    //     foreach ($menu as $item) {
    //         echo "<li>{$item['nama']}</li>";
    //     }
    
    //     echo "</ul>";
    // }

    function tampilkanMenuBertingkat(array $menu) {
        echo "<ul>";
    
        foreach ($menu as $key => $item) {
            echo "<li>{$item['nama']}";
            if (isset($item['subMenu']) && is_array($item['subMenu'])) {
                tampilkanMenuBertingkat($item['subMenu']);
            }
            echo "</li>";
        }
    
        echo "</ul>";
    }
    
    tampilkanMenuBertingkat($menu);

?>