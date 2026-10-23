<?php

class Produk{

    //property
    public string $kode; 
    public string $nama;
    public float $harga;
    public int $stok;

    //constant pajak = 0,11
    public const PAJAK = 0.11;

    public function __construct(string $kode, string $nama, float $harga, int $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function hitungPajak(): float
    {
        return $this->harga * self::PAJAK;
    }

}
    //object
    $produk = new Produk("P001", "Laptop", 1000000, 5);
    //$produk->kode = "P001";
    //$produk->nama = "Laptop";
    //$produk->harga = 1000000;
    //produk->stok = 5;

    //hitung total harga dengan pajak
    $pajak = Produk::PAJAK *100; //11
    $jumlahPajak = $produk->harga * produk::PAJAK; //11 juta

    //total
    $total = $produk->harga + $jumlahPajak; //11,1 juta

    //hasil
    echo "Kode :" , $produk->kode;
    echo "<br/>Nama :" , $produk->nama;
    echo "<br/>Harga :" , $produk->harga;
    echo "<br/>Stok :" , $produk->stok;
    echo "<br/>Pajak :" , $pajak . "%";
    echo "<br/>Jumlah Pajak :" , $jumlahPajak;
    echo "<br/>Total Harga setelah Pajak: Rp." , $total;