<?php
// if(
//     !isset ($_POST["itemid"]) || $_POST["itemid"] == "" ||
//     !isset ($_POST["itemname"]) || $_POST["itemname"] == "" ||
//     !isset ($_POST["itemcost"]) || $_POST["itemcost"] == "" ||
//     !isset ($_POST["quantity"]) || $_POST["quantity"] == ""
// ){
//     exit("paramError");
// }
//1. POSTデータ取得
//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
// $itemid = $_POST[$row["itemid"]];
// $itemname = $_POST[$row["itemname"]];
// $itemcost= $_POST[$row["itemcost"]];
// $quantity = $_POST[$row["quantity"]];
$itemid = $_POST["itemid"];
$itemname = $_POST["itemname"];
$itemcost= $_POST["itemcost"];
$quantity = $_POST["quantity"];

//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
// mamppの方は
// $pdo = new PDO('mysql:dbname=a_db;charset=utf8;host=localhost', 'root', '');

try {
    $pdo = new PDO('mysql:dbname=shopping_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO order_table(id,itemid, itemname, itemcost, quantity,
indate )VALUES(NULL, :itemid, :itemname, :itemcost, :quantity, sysdate())");
$stmt->bindValue(':itemid', $itemid, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':itemname', $itemname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':itemcost', $itemcost, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
    header("Location: cart.php");
    exit;
}
?>