<?php
    require_once 'bidang.php';
    class Segitiga extends Bidang{
        public $alas;
        public $tinggi;
        public $sisiA;
        public $sisiB;
        public $sisiC;

        public function __construct($alas, $tinggi, $sisiA, $sisiB, $sisiC){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
            $this->sisiA = $sisiA;
            $this->sisiB = $sisiB;
            $this->sisiC = $sisiC;
        }

        public function namaBidang(){
            echo '<b>Bidang Segitiga</b>';
        }

        public function luasBidang(){
            $luas = 1 / 2 * $this->alas * $this->tinggi;
            return $luas;
        }

        public function kelilingBidang(){
            $keliling = $this->sisiA + $this->sisiB + $this->sisiC;
            return $keliling;
        }
    }