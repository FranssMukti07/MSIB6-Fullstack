<?php
require_once 'Person.php';

class Dosen extends Person
{
    // member 1 = variable
    protected $nidn;
    protected $gelar;

    // member 2 = constructor
    public function __construct($_nama, $_gender, $_nidn, $_gelar)
    {
        parent::__construct($_nama, $_gender);
        $this->nidn = $_nidn;
        $this->gelar = $_gelar;
    }
    public function cetak()
    {
        parent::cetak();
        echo "<br>NIDN : $this->nidn";
        echo "<br>Gelar : $this->gelar";
    }
}
