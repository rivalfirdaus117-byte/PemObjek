<?php

class Produk{

    //property
    public string $kode; 
    public string $nama;
    public float $harga;
    public int $stok;

    //constant pajak = 0,11
    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK *100; //11
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK); //11,1 juta
    }
}
    //object
    $produk = new Produk();
    $produk->kode = "P001";
    $produk->nama = "Laptop";
    $produk->harga = 1000000;
    $produk->stok = 5;


    //hasil
    echo "Kode :" , $produk->kode;
    echo "<br/>Nama :" , $produk->nama;
    echo "<br/>Harga :" , $produk->harga;
    echo "<br/>Stok :" , $produk->stok;
    echo "<br/>Pajak :" , $produk->pajak() . "%";
    echo "<br/>Jumlah Pajak :" , $produk->jumlahPajak();
    echo "<br/>Total Harga setelah Pajak: Rp." , $produk->total();