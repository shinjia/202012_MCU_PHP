<?php
$do = isset($_GET['do']) ? $_GET['do'] : 'X';

switch($do)
{
    case 'ADD':
        $a = mt_rand(10, 99);
        $b = mt_rand(10, 99);
        $pic_op = 'images/add.jpg';
        break;
    
    case 'SUB':
        $a = mt_rand(10, 99);
        $b = mt_rand(1, $a);  // b要比a小
        $pic_op = 'images/sub.jpg';
        break;

    case 'MUL':
        $a = mt_rand(1, 9);
        $b = mt_rand(1, 9);
        $pic_op = 'images/mul.jpg';
        break;
    
    case 'DIV':
        $b = mt_rand(1, 9);
        $c = mt_rand(1, 9);  // 預先產生答案
        $a = $b * $c;
        $pic_op = 'images/div.jpg';
        break;

    case 'X':  // 隨機
        $x = mt_rand(1,4);  // 隨機產生加減乘除
        if($x==1) $choice = 'ADD';
        if($x==2) $choice = 'SUB';
        if($x==3) $choice = 'MUL';
        if($x==4) $choice = 'DIV';
        header('location: q.php?do=' . $choice);
}

$pic_a1 = 'images/' . floor($a/10) . '.jpg';  // a 的十位數
$pic_a2 = 'images/' . ($a%10) . '.jpg';  // a 的個位數
$pic_b1 = 'images/' . floor($b/10) . '.jpg';  // b 的十位數
$pic_b2 = 'images/' . ($b%10) . '.jpg';  // b 的個位數


// 處理a<10，十位數為零的情況
if($a<10)
{
    $pic_a1 = '';
}

// 處理b<10，十位數為零的情況
if($b<10)
{
    $pic_b1 = '';
}

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>game99 cai</title>
</head>
<body>
<h1>CAI 練習</h1>
<p><img src="{$pic_a1}"><img src="{$pic_a2}"><img src="{$pic_op}"><img src="{$pic_b1}"><img src="{$pic_b2}"></p>
<p><a href="q.php?do={$do}">換一題</a> | 
<a href="a.php?a={$a}&b={$b}&do={$do}">看答案</a></p>
</body>
</html>
HEREDOC;

echo $html;
?>