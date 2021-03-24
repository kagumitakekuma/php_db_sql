<?php

// session_start();
//     $_SESSION['cart']=[];       
//     $_SESSION['cart'][]=$_POST['itemname']; 


try {
$pdo = new PDO('mysql:dbname=shopping_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$sql= "SELECT *FROM item_table WHERE itemname=:iname AND itemcost=:icost AND quantity=:quantity";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':iname', $iname); 
$stmt->bindValue(':icost', $icost); 
$stmt->bindValue(':quantity', $quantity); 
$res = $stmt->execute();

if($res==false){
$error = $stmt->errorInfo();
exit("QueryError:".$error[2]);
}

//抽出データ数取得(1レコードだけを抽出)
$val= $stmt->fetch();

if( $val["id"]  != ""){
    $_SESSION["chk_ssid"] =session_id();
    $_SESSION["itemname"] =$val["itemname"];
    header("Location: index.php");
}else{
    header("Location: login.php");
}
exit();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>一発ギャグ購入処</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/style.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<header class="header">OWARAIOWARAIOWARIOWARAI</header>
       <a class="navbar-brand" href="index3.php">トップへ戻る</a>
    <div class="container jumbotron"><?=$view?></div>
</div>


<footer class="footer">OWARAIOWARAIOWARIOWARAI</footer>
</body>
</html>
