<!-- membuat program menghitung jabat tangan -->
<!-- Semoga Berhasil -->
<?php

    $jumlahAnggota = 6;
        function Handshake($jumlahAnggota){
            $totalHandshake = 0;
            for($i = 0; $i < $jumlahAnggota; $i++){
                for($j = 1; $j < $jumlahAnggota; $j++){
                    $totalHandshake += 1;
                }
            }
            return $totalHandshake/2;
        }
        echo Handshake($jumlahAnggota);
