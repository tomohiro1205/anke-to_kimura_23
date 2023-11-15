<?php
$date = $_POST["date"];
$name = $_POST["name"];
$racketmaker  = $_POST["racketmaker"];
$racket = $_POST["racket"];
$stringmaker  = $_POST["stringmaker"];
$string = $_POST["string"];
$tension = $_POST["tension"];
$aftension = $_POST["aftension"];
$remarks = $_POST["remarks"];
$c    = ",";


//文字作成
$str = $date.$c.$name.$c.$racketmaker.$c.$racket.$c.$stringmaker.$c.$string.$c.$tension.$c.$aftension.$c.$remarks;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");  // 　\はoption+¥ででる。
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<P><?=$str?></P>
<ul>
<li><a href="read.php">戻る</a></li>
</ul>
</body>
</html>