<?php

namespace PemObjek\Marketplace;

trait Produk
{
    // Property (Encapsulation: private)
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    // Constant
    public const PAJAK = 0.11;

    public function __construct()
    {
        // Kosong, karena pengisian nilai dilakukan lewat setter (method chaining)
    }

    // Setter (mengembalikan $this agar bisa method chaining)
    public function setKode(string $kode): self
    {
        $this->kode = $kode;
        return $this;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;
        return $this;
    }

    public function setHarga(int $harga): self
    {
        if ($harga <= 0) {
            echo "Harga tidak boleh 0 atau kurang";
            exit();
        }
        $this->harga = $harga;
        return $this;
    }

    public function setStok(int $stok): self
    {
        if ($stok <= 0) {
            echo "Stok tidak boleh 0 atau kurang";
            exit();
        }
        $this->stok = $stok;
        return $this;
    }

    // Getter
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

    public function pajak(): float
    {
        return self::PAJAK * 100; // 11
    }

    public function total(): float
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

    