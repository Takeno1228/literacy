<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<title>
キー入力イベント
</title>
<style>
input {
	display    : inline-block;
	width      : 180px;
	font-size  :  20px;
	border     :   2px solid red;
	text-align : center;
	cursor     : pointer;
	line-height: 1.5em;
}

#B {
	border     : 2px solid green;
}

</style>
</head>
<body>

<table>
<tr>
<td>onKeyUp</td><td><input type="text" id="A" value="テキスト入力" onKeyUp=alert("onKeyUp検出") /></td></tr>
<tr>
<td>onKeyDown</td><td><input type="text" id="B" value="テキスト入力" onKeyDown=alert("onKeyDown検出") /></td></tr>
</table>
</body>
</html>
