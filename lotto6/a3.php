<?php
$min = 1;
$max = 10;
$total = 6;


$check = '';
$a_box = array();
for($i=0; $i<$total; $i++)
{
    do {
        $num =  mt_rand($min, $max);
        $check .= $num . ', ';
    } while( in_array($num, $a_box) );

    $a_box[] = $num;
}


$str = '';
foreach($a_box as $one)
{
    $str .= '<img src="images/' . $one . '.jpg" width="81" height="81" />';
}


// 排序
sort($a_box);


$str2 = '';
foreach($a_box as $one)
{
    $str2 .= '<img src="images/' . $one . '.jpg" width="81" height="81" />';
}



$html = <<< HEREDOC
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Test</title>
</head>

<body>
<p>我的樂透猜測</p>
<p>抽出的數字：{$check}</p>
<p>原始順序</p>
<p>{$str}</p>
<p>排序後</p>
<p>{$str2}</p>
</body>
</html>
HEREDOC;

echo $html;
?>