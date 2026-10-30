<?php
// panggil file propertyconstant
require('./Propertyconstant.php');

use PemObjek\marketplace\Produk;
//object
$produk = new produk('P0001','laptop',1000000,5);

$produk->kode = 'P0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;


//hasil
echo "Kode :" , $produk->kode;
echo "<br/>Nama :" , $produk->nama;
echo "<br/>Harga :" , $produk->harga;
echo "<br/>Stok :" , $produk->stok;
echo "<br/>Pajak :" , $pajak . "%";
echo "<br/>Jumlah Pajak :" , $jumlahPajak;
echo "<br/>Total Harga setelah Pajak: Rp." , $total;