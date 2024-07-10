<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
$pen = "100";
$erasar = "200";
$ruler = "300";

$list = array(   

1=>array("merchandise"=>'鉛筆',"price"=>$pen,"taxprice"=>$pen*0.1+$pen,"dz"=>$pen*0.1+$pen*12), 

2=>array("merchandise"=>'消しゴム',"price"=>$erasar,"taxprice"=>$erasar*0.1+$erasar,"dz"=>$erasar*0.1+$erasar*12), 

3=>array("merchandise"=>'定規',"price"=>$ruler,"taxprice"=>$ruler*0.1+$ruler,"dz"=>$ruler*0.1+$ruler*12), 

);

?>

<table border ="1" style="border-collapse:collapse"><!--5-->

    <tr>

        <th>商品</th><th>価格</th><th>税込価格</th><th>Dz</th>

    </tr>

<?php

foreach($list as $v){


        echo "<tr>\n";

        echo "<td>".$v['merchandise']."</td>\n";

        echo "<td>".$v['price']."円</td>\n";

        echo "<td>".$v['taxprice']."円</td>\n";;
        
        echo "<td>".$v['dz']."円</td>\n";;

        echo "</tr>\n";


}

?>

</table>

</body>
</html>