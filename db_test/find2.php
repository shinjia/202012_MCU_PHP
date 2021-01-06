<?php


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<h1>Hello World</h1>

<form method="post" action="find2_x.php">
    姓名：<input type="text" name="key"><br >
    <input type="submit" value="查詢">
</form>

</body>
</html>
HEREDOC;

echo $html;
?>