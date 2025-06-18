<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<title>
マウスイベント
</title>
<style>
input {
	display    : block;
	width      :180px;
	font-size  : 20px;
	background : lightgreen;
	border     : 2px solid green;
	border-radius : 20%;
	text-align : center;
	cursor     : pointer;
	line-height: 1.5em;
}

input[value="onDblClick"] {
	background : aqua;
}
input[value="onMouseDown"] {
	background : rgb(185, 250, 45);
}
input[value="onMouseUp"] {
	background : #ffb3fe;
}
input[value="onMouseOver"] {
	background : #fff7b3;
}
input[value="onMouseOut"] {
	background : #efd2fa;
}
input[value="onMouseMove"] {
	background : #fcb6b8;
}

</style>
</head>
<body>

<input type="button" value="onClick" onClick=alert("onClick検出") />
<input type="button" value="onDblClick" onDblClick=alert("onDblClick検出") />
<input type="button" value="onMouseDown" onMouseDown=alert("onMouseDown検出") />
<input type="button" value="onMouseUp" onMouseUp=alert("onMouseUp検出") />
<input type="button" value="onMouseOver" onMouseOver=alert("onMouseOver検出") />
<input type="button" value="onMouseOut" onMouseOut=alert("onMouseOut検出") />
<input type="button" value="onMouseMove" onMouseMove=alert("onMouseMove検出") />

</body>
</html>
