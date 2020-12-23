<?php

$link = mysqli_connect('localhost', 'root', '', 'class');

// 寫下 SQL 指令
$sqlstr = " INSERT INTO person(usercode, username, address, birthday, height, weight, remark) VALUES('A09', 'Eric', 'Taipei', '1987-9-8', 180, 90, 'ok') ";
mysqli_query($link, $sqlstr);

mysqli_close($link);

echo 'ok';
?>