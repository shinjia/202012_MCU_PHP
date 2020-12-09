<?php
$h = isset($_POST['height']) ? $_POST['height'] : '';
$w = isset($_POST['weight']) ? $_POST['weight'] : ''; 

if($h==0)
{ 
    /*
    echo 'ERROR.....';
    echo '<a href="input.php">Input again</a>';
    exit;
    */
    header('location: input.php');   // 強制回到另一頁
}

// 計算 BMI
$bmi = ($w) / (($h/100) * ($h/100));
// $bmi = $w / pow(($h/100),2);
// $bmi = $w / (($h/100) ** 2);


// 取兩位小數
$bmi = round($bmi, 2);
// $bmi = number_format($bmi, 2);
// $bmi = floor($bmi*100) / 100;

$msg = '';
if( $bmi>=24 )
{
    $msg = '月巴月半';
}
elseif( ($bmi>=22) && ($bmi<24) )
{
    $msg = '過重'; 
}
elseif( ($bmi>=17.5) && ($bmi<22) )
{
    $msg = '正常'; 
}
elseif( $bmi<17.5 )
{
    $msg = '太輕';
}
else
{
    $msg = '程式一定有錯';
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI</title>
</head>
<body>
<h2>BMI = {$bmi}</h2>
<h2>狀態：{$msg}</h2>
<hr>
height = {$h}<br>
weight = {$w}
</frame>
</body>
</html>
HEREDOC;

echo $html;
?>