<?php
// Nama : Louis Paskalis Ginting
// NIM  : 121140066
// Kelas Praktikum : RB
class Biodata {
  public $name;
  public $umur;
  public $prodi;
  public $nim;
  public $hobi;

  function setBiodata($name, $umur, $prodi, $nim, $hobi) {
    $this->name = $name;
    $this->umur = $umur;
    $this->prodi = $prodi;
    $this->nim = $nim;
    $this->hobi = $hobi;
  }

  function getBiodata() {
    return "Nama Mahasiswa: " . $this->name . "<br>Umur: " . $this->umur . "<br>Prodi: " . $this->prodi . "<br>NIM: " . $this->nim . "<br>Hobi: " . $this->hobi;
  }
}

$biodata1 = new Biodata();
$biodata1->setBiodata("Louis Paskalis Ginting", 20, "Teknik Informatika", 121140066, "Makan");
echo $biodata1->getBiodata();
?>
