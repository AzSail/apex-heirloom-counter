<?php
    $num = fopen("counter.txt","r"); //看看膜了沉淀多少下
    $tql = fgets($num); 
    // $tql ++ ; //再膜一下沉淀
    if($_GET['rs'] != 0) $tql = $_GET['rs'];
    else if($_GET['add'] != 0) $tql += $_GET['add'];
    else if($_GET['snap'] == 1) $tql ++ ;
    else if($_GET['snap'] == -1 and $tql != 0) $tql -- ;
    else if($_GET['snap'] == -2) $tql = 0 ;
    $upd = fopen("counter.txt","w");
    fwrite($upd,$tql);
    echo $tql;
    fclose($num);
    fclose($upd);
?>