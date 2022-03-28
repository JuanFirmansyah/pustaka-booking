<?php
class Latihan1 extends CI_Controller {

    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $hasil = $n1 + $n2;
        echo "Hasil penjumlahan $n1 + $n2 = $hasil";
    }
}
?>