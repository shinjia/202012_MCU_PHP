<?php


$name = '陳信嘉';
$birth = 1970;
$photo = 'images/head1.jpg';


/*
$name = 'XXXXXX';
$birth = 1990;
$photo = 'images/head2.jpg';
*/

$age = date('Y', time()) - $birth;

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<h1>Hello World</h1>
<p>你好</p>
<p>姓名：{$name}</p>
<p>年齡：{$age}</p>
<p><img src="{$photo}"></p>
</body>
</html>
HEREDOC;

echo $html;
?>