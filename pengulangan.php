<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>
<body>
    <?php
    //Pengulangan for, dollar nya didefinisikan nya didalem (ini biasa dipake)
    for($i = 0; $i < 5; $i++){
        echo "<p>Ini pengulangan ke </p>";
    }
    
    echo "<br/>";
    for($i = 0; $i < 5; $i++){
        echo "<p>Ini pengulangan ke " . $i . "</p>";
    }
    ?>

    <hr/>
    <?php
    //Pengulangan while, dollar nya diluar terpisah, ini langsung pengkondisian
    $a = 0;
    while($a < 5){
        echo "<p>Ini pengulangan ke" . $a . "</p>";
        $a++;
    }
    ?>

    <hr/>
    <?php
    //Pengulangan do while,
    $b = 0;
    do{
        echo "<p>Ini pengulangan ke" . $b . "</p>";
        $b++;
    }while ($b < 5);
    ?>

    <hr/>
    <?php
    //Pengulangan do while, ini muncul hasilnya sekali langsung yg 6 karena tdk memenuhi kondisi (<5)
    $c = 6;
    do{
        echo "<p>Ini pengulangan ke" . $c . "</p>";
        $c++;
    }while ($c < 5);
    ?>

</body>
</html>