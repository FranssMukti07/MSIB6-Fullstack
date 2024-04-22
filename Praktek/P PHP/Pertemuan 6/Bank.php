<?php
class Bank
{
    protected $norek;
    public $nama;
    private $saldo;
    public const BANK = "Bank Syariah NFA";
    public static $jml = 0;

    public function __construct($no, $nasabah, $saldo)
    {
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }

    public function menabung($uang)
    {
        $this->saldo += $uang;
    }

    public function menarik($uang)
    {
        $this->saldo -= $uang;
    }

    public function mencetak()
    {
        echo "<b><u>" . self::BANK . "</u></b>";
        echo "<br>No. Rekening : $this->norek";
        echo "<br>Nama Nasabah : $this->nama";
        echo "<br>Saldo : $this->saldo";
        echo "<hr>";
    }
}
