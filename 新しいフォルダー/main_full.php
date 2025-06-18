<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<link rel="stylesheet" type="text/css" href="common.css" />
<title>
開けゴマ❤
</title>
</head>
<body>
<h1>情報リテラシ演習１</h1>
<h3>第10週 Webサイト構築（3）</h3>
<p>試しにWebページを作ってみた．</p>
<hr color="red">
<form action="sub_full.php" method="get" />
  <input type="submit" value="遷移ボタン" />
  <input type="text" name="textdata" value="テキスト入力" />
</form>
<hr color="red">
<form action="sub_full.php" method="get" />
  <p id="p_last">押せないボタン，3連発！</p>
  <input type="button" class="btn" id="blue_btn" value="ボタン1" />
  <input type="button" class="btn" id="pink_btn" value="ボタン2" />
  <input type="button" class="btn" id="yellow_btn" value="ボタン3" />
  <input type="hidden" value="wolves" name="hidden1" />
<hr color="red">
  <input type="submit" class="sbtn" value=" 遷移ボタン ">
</form>
<hr color="red">
  <p id="p_last">押したら，何が起きるかな？</p>
  <input type="button" class="btn" id="blue_btn" value="ボタン1" onClick=msg(1) />
  <input type="button" class="btn" id="pink_btn" value="ボタン2" onClick=msg(2) />
  <input type="button" class="btn" id="yellow_btn" value="ボタン3" onMouseOver=msg(3) />
  <input type="button" class="btn" value="強制遷移" onClick=msg(4) />

<p style="padding:0pt;border:0px solid black;">
<a href="https://www.aicit.jp/" target="_blank">Jump to 高度応用情報科学科HP</a>
</p>

<script type="text/javascript">
function msg(x) {
  if (x==1) { alert("ボタン1が押されたよ！"); }
  else if (x==2) { alert("ボタン2だね．このボタンは！"); }
  else if (x==3) { alert("えっボタン3，押してないよ(><)"); }
  else { window.location.href = 'sub_full.php'; }
}
</script>
</body>
</html>
