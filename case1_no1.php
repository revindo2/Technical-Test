<?php

// Data buah yang dimiliki oleh Andi
$andi_fruits = [
    [
        'fruitId' => 1,
        'fruitName' => 'Apel',
        'fruitType' => 'IMPORT',
        'stock' => 10
    ],
    [
        'fruitId' => 2,
        'fruitName' => 'Kurma',
        'fruitType' => 'IMPORT',
        'stock' => 20
    ],
    [
        'fruitId' => 3,
        'fruitName' => 'Apel',
        'fruitType' => 'IMPORT',
        'stock' => 50
    ],
    [
        'fruitId' => 4,
        'fruitName' => 'Manggis',
        'fruitType' => 'LOCAL',
        'stock' => 100
    ],
    [
        'fruitId' => 5,
        'fruitName' => 'Jeruk Bali',
        'fruitType' => 'LOCAL',
        'stock' => 10
    ],
    [
        'fruitId' => 6,
        'fruitName' => 'KURMA',
        'fruitType' => 'IMPORT',
        'stock' => 20
    ],
    [
        'fruitId' => 7,
        'fruitName' => 'Salak',
        'fruitType' => 'LOCAL',
        'stock' => 150
    ]
];

// Fungsi untuk mendapatkan daftar buah yang dimiliki Andi
function getAndiFruits($fruitsData)
{
    $andi_fruits_list = [];
    foreach ($fruitsData as $fruit) {
        // Konversi nama buah ke huruf kecil untuk konsistensi
        $fruitName = strtolower($fruit['fruitName']);
        if (!in_array($fruitName, $andi_fruits_list)) {
            $andi_fruits_list[] = $fruitName;
        }
    }
    return $andi_fruits_list;
}

// Mendapatkan daftar buah yang dimiliki Andi
$andi_fruits_list = getAndiFruits($andi_fruits);

// Menampilkan daftar buah yang dimiliki Andi
echo "Buah yang dimiliki Andi:\n";
foreach ($andi_fruits_list as $fruit) {
    echo "- $fruit\n";
}

?>
