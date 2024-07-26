<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $weeks = ['月','火','水','木','金','土','日'];
  ?>

<ul>

  <?php
    $a = 0;
    while($a <= 6){
      echo "<li>".$weeks[$a].曜日."</li>".'<br>';
      ++$a;
    }

    echo"</ul>"
    ?>
</body>
</html>