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

// Fungsi untuk memisahkan buah ke dalam wadah berdasarkan tipe buah
function separateByFruitType($fruitsData)
{
    $wadah = [];
    foreach ($fruitsData as $fruit) {
        $fruitType = $fruit['fruitType'];
        // Konversi nama buah ke huruf kecil untuk konsistensi
        $fruitName = strtolower($fruit['fruitName']);
        if (!isset($wadah[$fruitType])) {
            $wadah[$fruitType] = [];
        }
        // Masukkan buah ke dalam wadah yang sesuai
        if (!in_array($fruitName, $wadah[$fruitType])) {
            $wadah[$fruitType][] = $fruitName;
        }
    }
    return $wadah;
}

// Memisahkan buah ke dalam wadah berdasarkan tipe buah
$buah_per_wadah = separateByFruitType($andi_fruits);

// Menghitung jumlah wadah yang dibutuhkan
$jumlah_wadah = count($buah_per_wadah);

// Menampilkan jumlah wadah yang dibutuhkan
echo "Jumlah wadah yang dibutuhkan: $jumlah_wadah\n";

// Menampilkan buah apa saja di masing-masing wadah
foreach ($buah_per_wadah as $tipe_buah => $buah) {
    echo "Wadah untuk buah tipe $tipe_buah:\n";
    foreach ($buah as $nama_buah) {
        echo "- $nama_buah\n";
    }
    echo "\n";
}

?>
