<?php

// Panggil file PropertyConstant.php (pastikan nama file di folder sama persis)
require('./Jasa.php');

use PemObjek\Marketplace\Jasa;

// Membuat object dan mengisi properti melalui setter (method chaining)
$produk = new Jasa();

$produk->setKode('P0001')
       ->setNama('Laptop')
       ->setHarga(10000000)
       ->setStok(5);

// Menampilkan hasil melalui getter & method
echo "Kode: " . $produk->getKode() . "<br/>";

echo "Produk: " . $produk->getNama() . "<br/>";

echo "Harga: Rp. " . $produk->getHarga() . "<br/>";

echo "Stok: " . $produk->getStok() . "<br/>";

echo "Pajak: " . $produk->pajak() . "%<br/>";

echo "Total harga setelah pajak: Rp. " . $produk->total();

echo "<br/>Metode pembayaran: " . $produk->payment('virtual') . "<br/>";