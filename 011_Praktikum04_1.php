<!-- Muvidha Fatmawati Putri (21091397011) -->

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="/Muvidha FP(21091397011)_PBO_Praktikum 4"> 
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal 1</h2>


<?php

    class Orang {
        protected $nama,$umur;
        public function __construct($nama,$umur){
        $this->nama = $nama;
        $this->umur = $umur;
        }
    }

    class Dosen extends Orang   {
        private $nip;
        public function __construct($nama, $umur, $nip) {
            $this->nip = $nip;
            parent::__construct($nama, $umur);    
        }

        public function hasil() {
            return $this->nama . ' , umur ' . $this->umur. ' , NIP ' . $this->nip;
        }
    }

    $dosen1 = new Dosen('Putri', 42, 21091397011); 
    $dosen2 = new Dosen('Sarah', 39, 210913988);
    $dosen3 = new Dosen('Adinda', 28, 21091397203);

    echo $dosen1->hasil();
        echo '<br> <br>';
    echo $dosen2->hasil();
        echo '<br> <br>';
    echo $dosen3->hasil();
        echo '<br> <br>';

?>

</div>
</body>
</html>