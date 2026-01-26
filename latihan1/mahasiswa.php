<?php
class Mahasiswa {
    //Properti
    public $nama;
    public $nim;
    public $prodi;

    //method
    public function sayHello(){
        return "Hello, nama saya" . $this->nama . ", NIM : " . $this->nim . ", dari prodi " . $this->prodi . ".";
    }
    
    //method 2
    public function getProfile(){
        return "<br>Nama :". $this->nama . "<br>NIM :". $this->nim . "<br>Prodi :". $this->prodi . ".";
    }
}
//membuat objek dari mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Budi";
$mahasiswa1->nim = "T3124001";
$mahasiswa1->prodi = "informatika";

//membuat objek dari mahasiswa
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "aril";
$mahasiswa2->nim = "T3124002";
$mahasiswa2->prodi = "Sistem Informasi";

//cetak hasil
echo $mahasiswa1->sayHello()."<br>";

echo $mahasiswa2->getProfile()."<br>";
?>