<?php
$min = 1;
$max = 42;
$total = 6;

/*
$a_box[] = mt_rand(1, $max);
$a_box[] = mt_rand(1, $max);
$a_box[] = mt_rand(1, $max);
$a_box[] = mt_rand(1, $max);
$a_box[] = mt_rand(1, $max);
$a_box[] = mt_rand(1, $max);
*/

for($i=0; $i<$total; $i++)
{
    $num =  mt_rand($min, $max);
    $a_box[] = $num;
}


echo '<pre>';
print_r($a_box);
echo '</pre>';
// exit;


$str = '';
foreach($a_box as $one)
{
    $str .= '<img src="images/' . $one . '.jpg" width="81" height="81" />';
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
<p>
{$str}
</p>

</body>
</html>
HEREDOC;

echo $html;
?>