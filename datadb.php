<?php

$con = mysqli_connect('localhost', 'root', 'root', 'test');
mysqli_set_charset($con, 'utf8');

if(mysqli_connect_errno()){
    echo 'Error in db MySql '. mysqli_connect_error();
}
$query = 'SELECT * FROM news';
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
$row1 = mysqli_fetch_all($result);
if (!''){
   print_r( sprintf("%d",34567.45678));
}

