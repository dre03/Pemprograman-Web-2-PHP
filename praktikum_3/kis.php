<?php
    echo 'Nilai PHI : ' . Lingkaran::PHI;
    $ling1 = new Lingkaran(8);
    echo 'Jari2 Lingkaran : '.$ling1->jari;
    echo 'Luas Lingkaran  : '.$ling1->luas();
    Lingkaran::naikanCounter();
    echo 'Counter Sekarang : '.Lingkaran::$counter;



?>