<?php

namespace marketplace

class Produk{

    //property
    public string $kode; 
    public string $nama;
    public int $harga;
    public int $stok;

    //constant pajak = 0,11
    public const PAJAK = 0.11;

    public function __construct()
    {
       
    }
    

    //setters
    public function setKode( $kode): void
    {
        $this->kode = $kode;
    }
    public function setNama( $nama): void
    {
        $this->nama = $nama;
    }
    public function setHarga( $harga): void
    {

    if($harga < 0){
        echo "Harga tidak boleh 0";
        exit();
        }
        $this->harga = $harga;
        return $this;

    }

    public function setStok( $stok): void
    {
    
    if($stok < 0){
        echo "Stok tidak boleh 0";
        exit();
        }
        $this->stok = $stok;
        return $this;
    }

    public function getPajak(): float
    {
        return self::PAJAK;
    }
    public function hitungPajak(): float
    {
        return $this->harga * self::PAJAK;
    }
    public function getTotal(): int
    {
        return $this->harga + $this->hitungPajak();
    }

    //getters
    public function getKode(): string
    {
        return $this->kode;
    }
    public function getNama(): string
    {
        return $this->nama;
    }
    public function getHarga(): int
    {
        return $this->harga;
    }
    public function getStok(): int
    {
        return $this->stok;
    }
    public function getPajak(): float
    {
        return self::PAJAK;
    }
    public function getTotal(): int
    {
        return $this->harga + $this->hitungPajak();
    }



    public function hitungPajak(): float
    {
        return $this->harga * self::PAJAK;
    }
    
    public function total(){
        return $this->harga + (this->harga * self::PAJAK);
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