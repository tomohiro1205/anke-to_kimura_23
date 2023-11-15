<?php

// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

//＊配列の準備
$txt = [];
while (!feof($fp)) {
    //＊配列に入れる【explodeで配列に配列を入れる】
    $txt[] = explode(",", fgets($fp));
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php01/anke.css">
    <title>テンションデータ一覧</title>
    <style>
        td {
            background-color: greenyellow;
        }
    </style>
</head>

<body>
    <h1>テンションデータ入力</h1>
    <form action="read.php" method="post">
        <p class="a"> 張った日：<input type="text" name="date">
            使用者: <input type="text" name="name">
            ラケットメーカー：<input type="text" name="racketmaker">
            ラケット名: <input type="text" name="racket"></p>
        <p class="a">ストリングメーカー：<input type="text" name="stringmaker">
            ストリング名: <input type="text" name="string">
            テンション：<input type="text" name="tension">LB</p>
        <p class="a">張上後のテンション：<input type="text" name="aftension">DT
            備考：<input type="text" name="remarks">

        <p class="a"><input type="submit" value="送信">   </p>
    </form>
    <h1>テンションデータ一覧</h1>
     
     
        <button class="b" type="button" onclick="location.href='graf.php'">グラフ</button>
    
    



    <table>

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

        //＊ここで表示処理
        echo "<th>張った日</th><th>使用者</th><th>ラケットメーカー</th><th>ラケット名</th><th>ストリングメーカー</th><th>ストリング名</th><th>テンション(LB)</th><th>張上後(DT)</th><th>備考</th>";
        for ($i = 0; $i < count($txt) - 1; $i++) {
            echo "<tr>";
            echo "<td>" . $txt[$i][0] . "</td>";
            echo "<td>" . $txt[$i][1] . "</td>";
            echo "<td>" . $txt[$i][2] . "</td>";
            echo "<td>" . $txt[$i][3] . "</td>";
            echo "<td>" . $txt[$i][4] . "</td>";
            echo "<td>" . $txt[$i][5] . "</td>";
            echo "<td>" . $txt[$i][6] . "</td>";
            echo "<td>" . $txt[$i][7] . "</td>";
            echo "<td>" . $txt[$i][8] . "</td>";



            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>