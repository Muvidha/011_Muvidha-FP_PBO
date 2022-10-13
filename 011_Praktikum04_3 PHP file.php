<!-- Muvidha Fatmawati Putri (21091397011) --->

<?php

class Katak{
    protected $umur, $nama;
    public function __construct($umur, $nama){
        $this->umur = $umur;
        $this->nama = $nama;
    }
    public function getUmur(){
        return $this->umur;
    }
    public function getNama(){
        return $this->nama;
    }
    public function caraBergerak(){
        return 'Melompat';
    }
}

class Kecebong extends Katak{
    private $panjangEkor;
    public function __construct($umur, $nama, $ekor){
    $this->panjangEkor = $ekor;
    parent::__construct($umur, $nama);
    }
    public function getpanjangekor(){
        return $this->panjangEkor;
    }
    public function carabergerak(){
        return 'Berenang';
    }
}

$katak = new katak(5, 'Froggy');
$kecebong = new kecebong(5, 'Junior Froggy', 10);

?>

<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="/Muvidha FP(21091397011)_PBO_Praktikum 4.css">
    <title>Praktikum 4</title>
</head>
<body>
<h2><center>No 3</center></h2>
<table align="center">

<tr align="center" bgcolor="iceblue">
    <td>Objek</td>
    <td>Umur</td>  
    <td>Nama</td>  
    <td>Panjang Ekor</td>  
    <td>Cara Bergerak</td>      
</tr>

<tr>
    <td>01</td>
    <td><?=$katak->getUmur() ?> </td>  
    <td><?=$katak->getnama() ?> </td>  
    <td>-</td>  
    <td><?=$katak->carabergerak() ?> </td>      
</tr>

<tr>
    <td>02</td>
    <td><?=$kecebong->getUmur() ?></td>  
    <td><?=$kecebong->getNama() ?></td>  
    <td><?=$kecebong->getpanjangekor() ?></td>  
    <td><?=$kecebong->carabergerak() ?></td>      
</tr>

</table>
</body>
</html>