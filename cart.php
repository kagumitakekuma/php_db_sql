<?php
if(
!isset()



)



//データベース取得
$ordernumber=$_POST["quantity"]




try {
$pdo = new PDO('mysql:dbname=shopping_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM order_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .= $result["id"].":".$result["name"].",".$result["cost"];
    $view .= "</p>";
  }

}
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
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">カート</a>
      </div>
    </div>
  </nav>
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>


<footer class="footer">OWARAIOWARAIOWARIOWARAI</footer>
</body>
</html>
