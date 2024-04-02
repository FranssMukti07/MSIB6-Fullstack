<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $kampus;
    public $matkul;
    public $nilai;

    public function __construct($nim, $nama, $kampus, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kampus = $kampus;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function cariStatus()
    {
        return ($this->nilai >= 65) ? "Lulus" : "Tidak Lulus";
    }

    public function cariGrade()
    {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            $grade = "A";
        } elseif ($this->nilai >= 75) {
            $grade = "B";
        } elseif ($this->nilai >= 60) {
            $grade = "C";
        } elseif ($this->nilai >= 40) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        return $grade;
    }

    function cariPredikat()
    {
        switch ($this->cariGrade()) {
            case 'A':
                $predikat = "Sangat Memuaskan";
                break;
            case 'B':
                $predikat = "Memuaskan";
                break;
            case 'C':
                $predikat = "Cukup";
                break;
            case 'D':
                $predikat = "Kurang";
                break;
            case 'E':
                $predikat = "Sangat Kurang";
                break;
            default:
                $predikat = "";
                break;
        }
        return $predikat;
    }
}
