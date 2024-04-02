<?php
class Siswa
{
    public $nama;
    public $nilai;
    public $pelajaran;

    public function __construct($nama, $nilai, $pelajaran)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->pelajaran = $pelajaran;
    }
    
    public function getHasil()
    {
        return ($this->nilai > 55) ? "Lulus" : "Tidak Lulus";
    }
}
