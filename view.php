<?php

    $file = $_GET['file'];
    echo $file;

    //đọc nội dung tệp tin
    $contents = file($file);

    foreach($contents as $line){
        echo $line. '<br';
    }

?>
