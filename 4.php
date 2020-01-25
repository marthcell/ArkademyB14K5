<<?php
$string = "kerjakan cepat";
$count;

print("karakter yang memiliki duplikat:   ");
//menunjukkan karakter yang terduplikat
for($i = 0; $i < strlen($string); $i++) {
    $count = 1;
    for($j = $i+1; $j < strlen($string); $j++) {
        if($string[$i] == $string[$j] && $string[$i] != ' ') {
            $count++;
            $string[$j] = '0';
        }
    }
    if($count > 1 && $string[$i] != '0'){
        print($string[$i]);
        print(" <br> ");
    }
}
?>
<!-- Saya sudah berusaha mempelajari dan mencari tapi saya
hanya dapat memberikan jawaban yang demikian, saya harap
saya bisa diterima walau masih banyak kekurangan karena
saya juga baru belajar koding, terimakasih -->
