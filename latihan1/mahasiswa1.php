<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $prodi;

    public function __construct($nama, $nim, $prodi) 
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;

    }
    public function getProfile(){
    return "[$this->nim] $this->nama - $this->prodi";
    }
}

$m1 = new Mahasiswa("Putra", "T3124001", "Teknik Informatika");
echo $m1->getProfile();
