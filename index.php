<?php
// panggil file propertyconstant
require('./propertyconstant.php');

use PemObjek\marketplace\Produk;
//object
$produk = new produk();

$produk->setKode("P001");
$produk->setNama("Laptop");
$produk->setHarga(1000000);
$produk->setStok(5);

//hasil
echo "Kode :" , $produk->getKode();
echo "<br/>Nama :" , $produk->getNama();
echo "<br/>Harga :" , $produk->getHarga();
echo "<br/>Stok :" , $produk->getStok();
echo "<br/>Pajak :" , $produk->getPajak() * 100 . "%";
echo "<br/>Jumlah Pajak :" , $produk->hitungPajak();
echo "<br/>Total Harga setelah Pajak: Rp." , $produk->getTotal();