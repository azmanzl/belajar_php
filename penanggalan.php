<?php
    echo date("l, d-m-Y");
    echo "<br/>";
    echo date("l, d M Y");
    echo "<br/>";
    echo time();
    echo "<br/>";
    echo date("l", time()+60*60*24*2); // nambah hari 2 hari kedepan jadi ditambah, dikali 2
    echo "<br/>";
    echo date("l", time()-60*60*24*2); // kurang hari 2 hari kebelakang, tanda dikurang
    echo "<br/>";
    echo date("d M Y", time()+60*60*24*2); // cek tanggal 2 hari kedepan
?>