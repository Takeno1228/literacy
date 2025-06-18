<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<title>
マウスイベント
</title>
<style>
input[type="submit"] {
	display    :inline-block;
	font-size  : 20px;
	background : lightgreen;
	border     : 2px solid green;
	border-radius : 20%;
	text-align : center;
	cursor     : pointer;
	padding    : 0em 1em; 
	line-height: 1.5em;
}

</style>
</head>
<body>
<form action="test0.php" method="get">
<?php
	if(isset($_GET['animal'])){
		$a = $_GET['animal'];
		echo '<input type="submit" value="'.$a.'が好き！" onClick=bow("'.$a.'") />';
		}
		else {
		echo '<input type="submit" value="一番好きな動物は？" style="background:lightpink;" />';
		}
?>
<input type="radio" value="熊" name="animal" />熊
<input type="radio" value="猫" name="animal" />猫
<input type="radio" value="パンダ" name="animal" />パンダ
<input type="radio" value="犬" name="animal" />犬　
</form>

<script>
function bow(name) {
	var message = name +"さん，こんにちは！";
	alert(message);
}
</script>
</body>
</html>
