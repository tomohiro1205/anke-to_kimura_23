<html>
<head>
<meta charset="utf-8">
<title>テンションデータ</title>
</head>
<body>
    <h1>テンションデータ入力</h1>
<form action="write2.php" method="post">
<p>  日時：<input type="text" name="date">
    使用者: <input type="text" name="name"></p>
<p>ラケットメーカー：<input type="text" name="racketmaker">
	ラケット名: <input type="text" name="racket">
<p>ストリングメーカー：<input type="text" name="stringmaker">
	ストリング名: <input type="text" name="string"></p>
    <p>テンション：<input type="text" name="tension" >LB
    張上後のテンション：<input type="text" name="arftertension">DT</p>
    備考：<input type="text" name="remarks">

	<input type="submit" value="送信">
</form>


</body>
</html>