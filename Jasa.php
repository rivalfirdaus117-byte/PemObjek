<?php

namespace PemObjek\Marketplace;

require_once('./PropertyConstant.php');

use PemObjek\Marketplace\Produk;

class Jasa {
    
    use Produk;
    
    public function payment($tipe) {
        return match ($tipe) {
            'virtual' => 'Virtual Account',
            'qris' => 'QRIS',
            default => 'Hanya menerima pembayaran Virtual Account dan QRIS',
        };

    }
}