<?php
    //array di php ada 2 jenis
     //array function lgsg dr php nya, cara lama
    // $arr1 = array("Senin", "Selasa", "Rabu");

     //cara baru
    $arr2 = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];

    //echo hany bekerja untuk string atau int
    //keduanya itu khusus debugging / developer
    //var_dump() / print_r ini bisa buat array

    // var_dump($arr2);
    // echo "<br/>";
    // print_r($arr2);
    // echo "<br/>";
    // echo $arr2[1];

    //Cara 1 buat pengulangan sebuah data
    for($i = 0; $i < count($arr2); $i++){ //nambah munculin data baru yaitu kamis ditambah count sebut array brpa nya
        echo $arr2[$i] . "<br/>";
    }
    echo "<hr/>";
    //Cara 2 yg lebih sederhana itu foreach
    foreach($arr2 as $hari){
        echo $hari. "<br/>";
    }
?>