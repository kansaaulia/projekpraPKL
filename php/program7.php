<?php 
//perulangan array asosiatif

$data = ["ani" => 80, "budi" => 90, "charli" => 50, "doni" => 70, "eli" => 60, "fitra" => 100];
//menampilkan angka 80
echo $data["ani"];
//menampilkan $data angka 50
echo $data["charli"];

//ani, budi, charli disebut "key"
//80,90,50 disebut "value"

echo $data["budi"] * $data["charli"];

foreach($data as $siswa => $nilai) {
    echo "$siswa nilainya $nilai <br>";
}
?>