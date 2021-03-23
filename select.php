<?php
$itemname=$_POST["itemname"];
$itemcost=$_POST["itemcost"];
// $explanation=$_POST["explanation"];

try {
$pdo = new PDO('mysql:dbname=shopping_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$sql= "SELECT *FROM item_table WHERE itemname=:iname AND itemcost=:icost" ;
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':iname', $iname); 
$stmt->bindValue(':icost', $icost); 
$res = $stmt->execute();


if($res==false){
$error = $stmt->errorInfo();
exit("QueryError:".$error[2]);
}



//抽出データ数取得(1レコードだけを抽出)
$val= $stmt->fetch();

if( $val["id"]  != ""){
    // $_SESSION["chk_ssid"] =session_id();
    $_SESSION["username"] =$val["username"];
    header("Location: index.php");
}else{
    header("Location: login.php");
}
exit();

?>





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

<form method="post" action="cart.php">
<div class="a1">商品A</div>

 <fieldset>
     <label>数量：<input type="text" name="number"></label><br>
     <label>値段：<input type="text" name="much"></label><br>
     <input type="submit" value="カートに入れる">
    </fieldset>
</form>

<form method="post" action="index.php">
   <input type="submit" value="トップに戻る">
   </form>



<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="insert.php">カートを見る</a></div>
    </div>

<footer class="footer">OWARAIOWARAIOWARIOWARAI</footer>

</body>
</html>
