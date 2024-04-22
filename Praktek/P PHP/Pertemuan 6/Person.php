<?php
class Person
{
    protected $nama;
    protected $gender;

    public function __construct($_nama, $_gender)
    {
        $this->nama = $_nama;
        $this->gender = $_gender;
    }

    public function cetak()
    {
        echo "Nama Lengkap : $this->nama";
        echo "Jenis Kelamin : $this->gender";
    }
}
