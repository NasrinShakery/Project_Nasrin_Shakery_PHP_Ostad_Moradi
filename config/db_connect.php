<?php

$con = mysqli_connect('localhost','root','','nasrin');

if(!$con){
    echo 'اتصال برقرار نشد ! * ' . mysqli_connect_error();
}

?>