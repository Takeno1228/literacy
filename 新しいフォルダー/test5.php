<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<title>
HTML要素値を変更
</title>
<style>
#test5 { background : #FFFFA0;}
</style>
</head>
<body>
<p id="test5" onClick=ct()>test5.phpです</p>

<script>
function ct(){
  document.getElementById("test5").style.backgroundColor="#FFD0D0";
};
</script>
</body>
</html>
