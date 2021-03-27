<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>アンケートの表</title>
</head>

<body>

    <?php
    // ファイルを開く
    $openFile = fopen('data/data.txt', 'r');

    // ↓ここのechoははわかりやすいように書きましたが、くっつけて書いてもいいと思います。
    // 例えば、echo '<div class="w-75"><table class="table"><thead class="thead-dark"><tr>....';
    // classの中身は気にしなくて良いです。
    echo '<div class="w-75">';
    echo '<table class="table">';
    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th class="col-xs-2">日付</th><th class="col-xs-2">名前</th>';
    echo '<th class="col-xs-2">性別</th><th class="col-xs-2">好きな食べ物</th>';
    echo '</tr>';
    while ($str = fgets($openFile)) {
        // ','で区切ってある$strをexplode関数で配列化。
        // 配列のイメージ
        /* array(4) {
        *  [0]=>string(19) "2020/10/15 18:45:07"
        *  [1]=>string(8) "fukusima"
        *  [2]=>string(3) "men"
        *  [3]=>string(1) "
        *  "}
        */
        $newStr = explode(',', $str);
        echo '<tr>';

        // echo '<td>' . $newStr[0] . '</td>';
        // echo '<td>' . $newStr[1] . '</td>';
        // echo '<td>' . $newStr[2] . '</td>';
        // echo '<td>' . $newStr[3] . '</td>';
        // ↑このように書いてもいいが、
        // 同じ内容が４行続くのであれば 'for' か、'foreach'で書ける。

        // for文の場合はこう↓。
        // for ($i = 0; $i < count($newStr); $i++) {
        //     echo '<td>' . $newStr[$i] . '</td>';
        // }

        // foreachの場合はこう↓
        // よくわからなければ、'echo'で各変数の中身に何があるか確認する。
        foreach ($newStr as $key => $val) {
            // $valは使わない
            echo '<td>' . $newStr[$key] . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
    // ファイルを閉じる
    fclose($openFile);
    ?>
    <a href="input.php">書き込みはこちら</a>
</body>

</html>
