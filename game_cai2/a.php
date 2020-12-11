<?php

$do = isset($_GET['do']) ? $_GET['do'] : 'X';
$a = isset($_GET['a']) ? $_GET['a'] : 1;
$b = isset($_GET['b']) ? $_GET['b'] : 1;

switch($do)
{
   case 'ADD':
      $ans = $a + $b;
      $sign = '+';
      break;
   
   case 'SUB':
      $ans = $a - $b;
      $sign = '-';
      break;

   case 'MUL':
      $ans = $a * $b;
      $sign = '*';
      break;

   case 'DIV':
       $ans = $a / $b;
       $sign = '/';
      break;

   case 'X':
      header('location: q.php');
}

$n1 = $ans % 10;       // 個位數
$n2 = floor($ans/10) % 10;  // 十位數
$n3 = floor($ans/100);  // 百位數

$pic_n1 = '<img src="images/' . $n1 . '.jpg">';
$pic_n2 = '<img src="images/' . $n2 . '.jpg">';
$pic_n3 = '<img src="images/' . $n3 . '.jpg">';

// 補充 (百位數有零時不顯示圖)
if( $n3==0 )
{
   $pic_n3 = '';

   // 若同時百位數也是零時，不顯示
   if($n2==0)
   {
      $pic_n2 = '';
   }
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>game99 cai</title>
</head>
<body>
<h1>CAI 答案</h1>

<p>{$a} {$sign} {$b} = {$ans}</p>
<p>{$pic_n3}{$pic_n2}{$pic_n1}</p>
<p>
<a href="q.php?do=ADD">加法</a> |
<a href="q.php?do=SUB">減法</a> |
<a href="q.php?do=MUL">乘法</a> |
<a href="q.php?do=DIV">除法</a> |
<a href="q.php?do=X">隨機出題</a> |
| <a href="index.php">回主選單</a></p>
</body>
</html>
HEREDOC;

echo $html;
?>