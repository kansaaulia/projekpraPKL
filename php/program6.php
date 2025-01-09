<?php 
// program perulangan foreach

//ini contoh array berindex 
//index dimulai dari 0
// ani ada diposisi 0
//budi ada diposisi 1
//charli ada diposisi 2
$siswa = ["ani ","budi","charli","doni","eli ","fitra","gani ",];
echo $siswa[0];
//panggil data "gani"
echo $siswa[6];
//panggil data "eli"
echo $siswa [4];


foreach ($siswa as $x) {
    echo "$x ";
}
?>