<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>一発ギャグ購入処</title>
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="cart.php">
<div class="a1">商品A</div>
 <fieldset>
     <label>数量：<input type="text" number="number1"></label><br>
     <label>値段：<input type="text" name="much"></label><br>
     <label><textArea name="address" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="カートに入れる">
    </fieldset>
</form>

<form method="post" action="index.php">
   <input type="submit" value="トップに戻る">
   </form>



<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="cart.php">カートを見る</a></div>
    </div>

</body>
</html>
