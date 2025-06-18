<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="common.css" />
<title>
閉じろセサミ♠
</title>
</head>
<body>
<h1>情報リテラシ演習１</h1>
<h3>第10週 Webサイト構築（3）</h3>
<p>main_full.phpからデータを受け取った．</p>
<?php
if(isset($_GET['textdata'])){  //負けた回数
   echo '<p id="pcls">「'.$_GET['textdata']."」を受け取った！</p>";
   } else {
   echo "と思ったら，何も受け取れなかったよorz<br>でも";
   }
if(isset($_GET['hidden1'])){  //負けた回数
   echo '<p id="p_last">隠しコマンドは'.$_GET['hidden1']."</p>";
   } else {
   echo "<br>隠しコマンドって何？それ美味しいの？<br>";
   }
?>
<br>
<br>
<a href="main_full.php" >戻る</a>
</body>
</html>
