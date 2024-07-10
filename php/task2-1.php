<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $weeks = array('月','火','水','木','金','土','日')
  ?>
  <ul>
    <!-- <?php foreach( $weeks as $week ){ ?>
      <li><?php print $week; ?>曜日</li>
    <?php } ?>   -->
    <li>
      <?php echo $weeks[0]."曜日";
    ?>
    </li>
    <li>
      <?php echo $weeks[1]."曜日";
    ?>
    </li>
    <li>
      <?php echo $weeks[2]."曜日";
    ?>
    </li>
    <li>
      <?php echo $weeks[3]."曜日";
    ?>
    </li>
    <li>
      <?php echo $weeks[4]."曜日";
    ?>
    </li>
    <li>
      <?php echo $weeks[5]."曜日";
    ?>
    </li>
    <li>
      <?php echo $weeks[6]."曜日";
    ?>
    </li>
  </ul>
</body>
</html>