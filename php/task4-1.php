<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    $luck =rand(1,100);

    if($luck <= 5):
      $result ='大凶';
    elseif($luck <= 20):
      $result ='凶';
    elseif($luck <=50):
      $result ='吉';
    elseif($luck <=80):
      $result ='中吉';
    else:
      $result ='大吉';
    endif;

    echo "<h1>".'今日の運勢は"'.$result.'"です。'."</h>";
    echo $luck
  ?>
</body>
</html>