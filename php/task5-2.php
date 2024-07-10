<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $weeks = [
    1 => "月",
    2 => "火",
    3 => "水",
    4 => "木",
    5 => "金",
    6 => "土",
    7 => "日",
  ];
  ?>

<ul>

  <?php
    $a = 1;
    while($a <= 7){
      echo "<li>".$weeks[$a].曜日."</li>".'<br>';
      ++$a;
    }

    echo"</ul>"
    ?>
</body>
</html>