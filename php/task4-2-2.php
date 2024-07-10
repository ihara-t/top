<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
$month = rand(1, 12);

if ($month >= 3 && $month <= 5) {
    $season = "春";
} elseif ($month >= 6 && $month <= 8) {
    $season = "夏";
} elseif ($month >= 9 && $month <= 11) {
    $season = "秋";
} else {
    $season = "冬";
} 

echo "<h1>{$month}月は{$season}の季節です。</h1>";
?>

</body>
</html>