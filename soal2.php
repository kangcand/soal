<?php
class operasiBilangan
{
private $bilangan1;
private $bilangan2;

function __construct($x, $y)
{
$this->bilangan1 = $x;
$this->bilangan2 = $y;
}

function bacaBilangan1()
{
return $this->bilangan1;
}

function bacaBilangan2()
{
return $this->bilangan2;
}

function jumlahkan()
{
$hasil = $this->bilangan1 + $this->bilangan2;
return $hasil;
}

function kalikan()
{
$hasil = $this->bilangan1 * $this->bilangan2;
return $hasil;
}
}
// instantisasi dan setting properties
$operasi1 = new operasiBilangan(4, 5);
echo '<p>Hasil penjumlahan '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().' adalah '.$operasi1->jumlahkan().'</p>';
echo '<p>Hasil perkalian '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().' adalah '.$operasi1->kalikan().'</p>';
?>