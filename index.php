<?php
 //đọc và hiên thị nội dung bên trong thư mục result
 $files = scandir('result/'); //$files là 1 mảng
 foreach($files as $file){
     echo $file.'<br>';
 }

 //lấy ra 1 tệp tin
 $file_1 = $file[1];
 echo $file_1;

 $items = explode('_', $file_1); //hàm explode dùng tách chuỗi
 foreach($items as $item){
     echo $item.'<br>';
 }

 echo '<br>';

?>