<?php
class BankTugas{
    //variable
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    //konstruktor
    public function __construct($nip,$nama,$jabatan,$agama,$status){
    $this->nip= $nip;
    $this->nama= $nama;
    $this->jabatan= $jabatan;
    $this->agama= $agama;
    $this->status= $status;
    }
    public function gapok(){
        switch ($this->jabatan) {
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kabag': $gapok = 7000000; break;
            case 'Staff': $gapok = 4000000; break;
            default: $gapok = '';
        }
        return $gapok;
    }
    public function tunjab(){
        $tunjab = $this->gapok() * 20/100;
        return $tunjab;
    }
    public function tunkel(){
        $tunkel = ($this->status == "menikah")?$this->gapok() * 10/100: 0;
        return $tunkel;
    }
    public function gator(){
        $gator = $this->gapok() + $this->tunjab();
        return $gator;
    }
    public function zaprof(){
        $zaprof = ($this->agama == "islam" && $this->gator() == 6000000 )?$this->gator() * 2.5/100: 0;
        return $zaprof;
    }
    public function thp(){
        $thp = $this->gator() - $this->zaprof();
        return $thp;
    }
    public function mencetak(){
        echo '<br/>NIP:'.$this->nip;
        echo '<br/>Nama:'.$this->nama;
        echo '<br/>Agama:'.$this->nama;
        echo '<br/>jabatan:'.$this->nama;
        echo '<br/>Status:'.$this->nama;
        echo '<br/>Gaji Pokok: Rp.'.number_format($this->gapo(),0,',','.');
        echo '<br/>Tunjangan Jabatan: Rp.'.number_format($this->tunjab(),0,',','.');
        echo '<br/>Tunjangan Keluarga: Rp.'.number_format($this->tunkel(),0,',','.');
        echo '<br/>Gaji Kotor: Rp.'.number_format($this->gator(),0,',','.');
        echo '<br/>Zakat Profesi: Rp.'.number_format($this->zaprof(),0,',','.');
        echo '<br/>Take Home Pay: Rp.'.number_format($this->thp(),0,',','.');
    }
}
?>