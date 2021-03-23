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
</tr>


<?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  ?>

<form method="POST" action="select.php" class="form">
<tr class="item">
<th><?=htmlspecialchars($row["id"])?></th>
<th><?=htmlspecialchars($row["itemname"])?></th>
<th><?=htmlspecialchars($row["itemcost"])?></th>
<th><?=htmlspecialchars($row["explanation"])?></th>
<th><input type="quantity" name="quantity"></th>
</tr>

<?php
}
$pdo=null;
?>
</table>
<!-- <input type="submit" value="商品詳細画面を見る"> -->
</form>



    <div><a class="navbar-brand" href="insert.php">カートを見る</a></div>
    </div>
<footer class="footer">OWARAIOWARAIOWARIOWARAI</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script></script>
</body>
</html>
