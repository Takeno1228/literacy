<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<title>
DOMツリーを介してHTML要素を抽出
</title>
<style>
#test4 { background : yellow;}
</style>
</head>
<body>
<p id="test4" onMouseOver=ct()><font color="red">test4.phpです</font></p>

<script>
alert(document.getElementById("test4"));
alert(document.getElementById("test4").innerHTML);
alert(document.getElementById("test4").innerText);
function ct(){
  document.getElementById("test4").innerText="変換しました";
};
</script>
</body>
</html>
