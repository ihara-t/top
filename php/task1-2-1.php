<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<p>
<?php
$var1 = "10%";
$var2 = "0.1";
$pen = "100";
$erasar = "200";
echo 現在、消費税は, $var1, です。 ,"<br>" , 鉛筆が ,$pen,円で税込 , $pen*$var2+$pen, 円です。,"<br>",消しゴムが,$erasar,円で税込, $erasar*$var2+$erasar,円です。;
?>
</p>
</body>
</html>