<?php

// $sql=null;
// $stmt=null;

try {
$pdo = new PDO('mysql:dbname=shopping_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$sql="SELECT *FROM items_table";
$stmt = $pdo->prepare($sql);
$status=$stmt->execute();

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>一発ギャグ購入処</title>
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<header class="header">OWARAIOWARAIOWARIOWARAI</header>
<h1>一発ギャグ購入処</h1>
<h2>ここは、あなたが人生一発逆転できるかもしれない、ギャグ購入処です。</h2>
<h2>何年も芸人生活を続けて、この先テレビに出られる保証はないですね。</h2>
<h2>世の中に広まっている一発ギャグを購入し、自分のものとしてテレビに出てみてはいかがでしょうか。</h2>
<h2>悩める芸人諸君、一度ご覧あれ。</h2>


<table border="1" style="border-collapse: collapse">
<tr class="item">
<th>商品コード</th>
<th>商品名</th>
<th>価格</th>
<th>説明</th>
<th>数量</th>
<th>カートに入れる</th>
</tr>

<form method="POST" action="insert.php" class="form">
<?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr class="item">
<th><input type="hidden" name="itemid" value="<?=$row["itemid"]?>"> <?=$row["itemid"]?> </th>
<th><input type="hidden" name="itemname" value="<?=$row["itemname"]?>"> <?=$row["itemname"]?> </th>
<th><input type="hidden" name="itemcost" value="<?=$row["itemcost"]?>"> <?=$row["itemcost"]?> </th>
<th><input type="hidden" name="explanation" value="<?=$row["explanation"]?>"> <?=$row["explanation"]?> </th>
<th><input type="quantity" name="quantity"></th>
<th><input type="submit" value="追加"></th>
</tr>
<?php
}
$pdo=null;
?>
</table>
</form>

    <div><a class="navbar-brand" href="cart.php">カートを見る</a></div>
    </div>
<footer class="footer">OWARAIOWARAIOWARIOWARAI</footer>

</body>
</html>
