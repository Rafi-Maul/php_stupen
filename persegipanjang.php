<?php
require_once 'bidang.php';
class PersegiPanjang extends Bidang{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang(){
        echo '<b>Bidang Persegi Panjang</b>';
    }

    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function kelilingBidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }
}