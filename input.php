<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>課題テンプレート</title>
</head>

<body>
    <!-- formを設置、actionと、methodをしっかり設定する。 -->
    <form action="write.php" method="post" class="table table-striped">
        <!-- 各項目にnameを設定する。 -->
        <p>お名前: <input type="text" name="name"></p>
        <p>性別: <input type="radio" name="gender" value="men" checked="checked">男性
            <input type="radio" name="gender" value="woman">女性
        </p>
        <p>好きな食べ物: <input type="text" name="love"></p>
        <input type="submit" value="送信" class="btn btn-primary mb-2">
    </form>
    <a href='read.php'>書き込み内容はこちら</a>
</body>

</html>
