<?php
//Ini single komentar
#Ini komentar single juga
/**
 * Ini komentar line 1
 */
//Gunakan \n untuk enter di terminal
//Gunakan <br/> untuk di browser

//Ini untuk menampilkan kalimat/string (Cara 1), ini biasa dipake
echo "'Azma Nuzula Laila" . "(menggunakan echo)\n";
echo "<br/>";
//Cara 2 menggunakan print
print "'Azma Nuzula Laila" . "(menggunakan print)\n";
echo "<br/>";
//Cara 3 bisa digunakan untuk menampilkan data string, array, dsb
//print_r adalah fungsi build-in dari php
print_r("'Azma Nuzula Laila" . "(menggunakan print_r)\n");
echo "<br/>";
//Cara 4 menggunakan var_dump (bawaan dari php)
//Cara ini khusus untuk analisa data / untuk programmer
var_dump("'Azma Nuzula Laila (menggunakan var_dump)");
echo "<br/>";

$string_satu = "'Azma Nuzula Laila";
$string_dua = "(menggunakan varible terpisah)";

echo $string_satu . ' '. $string_dua; //nambah spasi pake kutip ' '
//echo juga bisa digunakan utk tipe data integer
echo "<br/>";
echo 12 + 8 . "\n"; //integer int

echo "12" + 8; //string
//Secara default string di convert ke int oleh php
//Bukan cara yang direkomendasi

echo "<br/>";
$x = 4;
$y = 10;

$hasilxy = $x * $y;

echo "hasil kali" . $x . "x" . $y ." = " . $hasilxy;

echo 25 + 5;
echo "\n";
echo 25 - 5;
echo "\n";
echo 25 * 5;
echo "\n";
echo 25 / 5;
echo "\n";
echo 25 % 2; //Ini modulus untuk mencari nilai akhir apakah ada sisa atau tidak
echo "\n";
echo "<br/>";

$a = 5;
$a = 10;
echo $a;
echo "<br/>";

$a = 5;
$a += 10;
echo $a;
echo "<br/>";

$a = "Azma";
$a .= "Gunakan . untuk menggabungkan";
$a .= "Sambungan lagi";
echo $a;

echo "<br/>";
//biasanya untuk menggabungkan tag html pada logic, misal
$a = "<div>";
$a = "<h3>Azma</h3>";
$a .= "<p>(Gunakan . untuk menggabungkan) </p>";
$a .= "<p>(Sambungan lagi)</p>";
$a .= "</div>";
echo $a;

echo "<br/>";
//bolean berisi true atau false || 1 / 0
//var_dump untuk isi atau nilai
var_dump(1 == "1"); //ini true karena hanya membandingkan value
var_dump(1 === "1"); //ini false karena beda data 1 int 1 string, membandingkan tipe data

echo "<br/>";
/**
 * operator logika && artinya and
 * || artinya or
 * ! artinya not
 * > more than
 * < less than
 * == equal
 * >= more than or equal
 * <= less than or equal
 * != not equal
 */
$umur = 15;
var_dump($umur <20 && $umur >= 16); //ini false karena 15 kurang dr 16

echo "<br/>";
$umur = 17;
var_dump($umur <20 && $umur >= 16); //ini true karena 17 lebih dr 16 & kurang dr 20

$umur = 17;
var_dump($umur > 20 && $umur >= 16); //false

$nama = "T.G";
var_dump($nama == "TG"); //false

$nama = "'Azma Nuzula Laila";
$umur = "22";
$birthday = "09-03-2002"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba php</title>
</head>
<body>
    <ul>
        <li>Nama : <?php echo $nama; ?></li>
        <li>Umur : <?php echo $umur; ?></li>
        <li>Tanggal lahir : <?php echo $birthday; ?></li>
        <li>5 x 5 = <?= 5 * 5; ?></li> <!--Contoh ga pake echo-->
    </ul>
</body>
</html>