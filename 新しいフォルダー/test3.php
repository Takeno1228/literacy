<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<title>
フォームイベント
</title>
<style>
input {
	display    : inline;
	width      :180px;
	font-size  : 20px;
	background : lightgreen;
	border     : 2px solid green;
	text-align : center;
	line-height: 1.5em;
}
input[type="textarea"] {
	background : aqua;
}
input[type="button"] {
	background : lightyellow;
}
</style>
</head>
<body>
<form action="" method="GET" onSubmit=alert("onSubmit検出")>
<table>
<tr><td>onSubmit</td>
<?php
if(isset($_GET['abc'])){
	$a = $_GET['abc'];
	$b = $_GET['def'];
	echo '<td><input type="submit" value="送信: '.$a+$b.'" /> ← a+b</td></tr>';
	}
else {
	$a=0;
	$b=10;
	echo '<td><input type="submit" value="送信" style="background:lightpink;" /></td></tr>';
}
?>
<tr><td>onChange</td><td><input type="textarea" value=<?php echo $a; ?> name="abc" onChange=alert("onChange検出") /> → a</td></tr>
<tr><td>onInput</td><td><input type="textarea" value=<?php echo $b; ?> name="def" onInput=alert("onInput検出") /> → b</td></tr>
<tr><td>onBlur</td><td><input type="button" value="onBlur" onBlur=alert("onBlur検出") /></td></tr>
<tr><td>onFocus</td><td><input type="text" value="onFocus" id="bgcolorchange" /></td></tr>
</table>
</form>
<script>
document.getElementById("bgcolorchange").onfocus = function() {
	this.style.backgroundColor = "lightpink";
};
</script>
</body>
</html>
