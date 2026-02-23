<?php

class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getInfo() {
        return "Judul: " . $this->judul . 
               ", Penulis: " . $this->penulis . 
               ", Tahun: " . $this->tahunTerbit;
    }
}

$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);
$buku2 = new Buku("Bumi", "Tere Liye", 2014);
$buku3 = new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009);

echo "<ul>";
echo "<li>" . $buku1->getInfo() . "</li>";
echo "<li>" . $buku2->getInfo() . "</li>";
echo "<li>" . $buku3->getInfo() . "</li>";
echo "</ul>";

?>