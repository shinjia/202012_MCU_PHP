<?php
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$comment  = isset($_POST['comment']) ? $_POST['comment'] : '';

$now = date('Y-m-d H:i:s', time());




$data = <<< HEREDOC
時間：{$now}
姓名：{$nickname}
意見：{$comment}
---------------------------------------------------

HEREDOC;

$filename = 'save/' . date('Ymd') . '.txt';

$old = file_get_contents($filename);
$new = $data . $old;

if(!file_exists($filename))
{
    file_put_contents($filename, '');
}
file_put_contents($filename, $new);



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<p>謝謝，已經收到您的意見!!!</p>

</body>
</html>
HEREDOC;

echo $html;
?>