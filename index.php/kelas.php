<?php

class Mahasiswa {
    private $nama;
    private $nim;
    private $semester;

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setNim($nim) {
        $this->nim = $nim;
    }
    public function setSemester($semester) {
        $this->semester = $semester;
    }
}

$budi = new Mahasiswa ();
$budi->setNama("Budi Santoso");
$budi->setNim("0110224123");
$budi->setSemester(4);

echo $budi->getNama() . '<br>';
echo $budi->getNim() . '<br>';
echo $budi->getSemester() . '<br>';

echo $siti->getSemester() . '<br>';
echo $siti->getSemester() . '<br>';
echo $siti->getSemester() . '<br>';

