<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php

$lists = array(   

1=>array("goods"=>'鉛筆',"price"=>'100円',"taxprice"=>'110円'), 

2=>array("goods"=>'消しゴム',"price"=>'200円',"taxprice"=>'220円'), 

3=>array("goods"=>'定規',"price"=>'300円',"taxprice"=>'330円'), 

);

?>

<table border ="1" style="border-collapse:collapse"><!--5-->

    <tr>

        <th>商品</th><th>価格</th><th>税込価格</th>

    </tr>

<?php

foreach($lists as $list){


        echo "<tr>";

        echo "<td>".$list['goods']."</td>";

        echo "<td>".$list['price']."</td>";

        echo "<td>".$list['taxprice']."</td>";;

        echo "</tr>";


}

?>

</table>

</body>
</html>