<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<title>
HTML要素値を変更
</title>
<style>
#test6 { background : #FFFFA0;}
</style>
</head>
<body>
<p id="test6" onClick=ct1()>関数ct1を実行</p>
<p id="test6" onClick=ct2()>関数ct2を実行</p>

<script>
function ct1(){
  alert(window.location.href);
};
function ct2(){
  window.location.href="test0.php";
};
</script>
</body>
</html>
