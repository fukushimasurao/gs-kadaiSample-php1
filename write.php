<?php
function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES);
}

// formでPOSTにより送信した場合は、$_POSTで受け取る。
// formでGETにより送信した場合は、$_GETで受け取る。
// GETメソッド、POSTメソッドは違うものだが、今回の内容はどちらでもok

// XSS対策のため、htmlspecialchars処理を行う。
$name = h($_POST['name']);
$gender = h($_POST['gender']);
$love = h($_POST['love']);

//文字作成
$time = date('Y/m/d H:i:s');

// それぞれの項目を , で区切る。
$str = $time . ',' . $name . ',' . $gender . ',' . $love;
//File書き込み( ※フォルダは先に用意する )
$file = fopen('./data/data.txt', 'a');    // ファイル読み込み
fwrite($file, $str . "\n");
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>File書き込み</title>
</head>

<body>
    <p>書き込みしました。</p>
    <p>時間: <?= $time ?> </p>
    <p>名前: <?= $name ?> </p>
    <p>性別: <?= $gender ?> </p>
    <p>好きな食べもの: <?= $love ?> </p>
    <a href='read.php'>確認はこちら</a>
    <br>
    <a href='input.php'>戻る</a>
</body>

</html>
