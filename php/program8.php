<?php
//function atau fungsi
//sekumpulan kode program untuk melakukan tugas tertentu
//dan bisa dipanggil berulang - ulang 

//ada 2 jenis fungsion :
//1. bawaan dari bahasa pemrograman PHP. contoh : mysqli_connect, dll
//2. buatan pengguna 


function cetak() {
    echo "hello world <br>";
    echo "selamat datang <br>";
    echo "bonjour <br>";
    echo "gutten morgen <br>";
}
cetak();
cetak();

//function akan berjalan, ketika dia dipanggil 
//didalam tanda () di function cetak() kita bisa menuliskan "parameter"
//didalam tanda () di pemanggilan cetak() kita bisa menuliskan "argument"

//$nama disebut "parameter"
//"halo" adalah nilai default $nama 
function tampil($nama = "halo") {
    echo "namanya adalah $nama <br>";
}

//ani dan budi disebut "argument"
tampil("ani");
tampil("budi");
//ini akan memanggil nilai "halo"
//sehingga tampilannya menjadi : namanya adalah halo 
tampil();

function hitung($x, $y) {
    echo "perkalian : " . $x * $y . "<br>";
    echo "pembagian : " . $x / $y . "<br>";
}

hitung(8,4);


//ini contoh function yang mengembalikan nilai
//$x akan diisi angka 10
//$y akan diisi angka 2
//diproses, kemudian hasil angka 12 disimpan dalam $hasil 
//lalu isi $hasil dikirim kembali ke kode yang memanggil fungsinya 
function kembalian($x,$y) {
    $hasil = $x + $y;
    return $hasil;
}

echo "hasilnya : " . kembalian(10,2);
?>