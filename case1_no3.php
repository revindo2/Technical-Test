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

// Fungsi untuk menghitung total stok buah di masing-masing wadah
function calculateTotalStockPerWadah($fruitsData)
{
    $total_per_wadah = [];
    foreach ($fruitsData as $fruit) {
        $fruitType = $fruit['fruitType'];
        $stock = $fruit['stock'];
        if (!isset($total_per_wadah[$fruitType])) {
            $total_per_wadah[$fruitType] = 0;
        }
        $total_per_wadah[$fruitType] += $stock;
    }
    return $total_per_wadah;
}

// Menghitung total stok buah di masing-masing wadah
$total_stok_per_wadah = calculateTotalStockPerWadah($andi_fruits);

// Menampilkan total stok buah di masing-masing wadah
echo "Total stock buah di masing-masing wadah:\n";
foreach ($total_stok_per_wadah as $tipe_buah => $total_stock) {
    echo "Wadah untuk buah tipe $tipe_buah: $total_stock\n";
}

?>
