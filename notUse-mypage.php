<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="set.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>マイページ</title>
</head>
<body>
    <div class="main">
            <div class="top">
                <h1>Emotions/Meter</h1>
            </div>
            <hr>

    <?php
    $ID = $_POST['ID'];
    $Pass = $_POST['password'];
        //認証が通らないときはエラーメッセージを表示
        //IDリスト,パスワードリストと照らし合わせて正しいかを出力
        if(isset($ID) && isset($Pass)){         
            print "<h2>".$ID."さん、こんにちは。</h2>";//出力テスト
            print "<p>過去の日記一覧</p>";
            print ""; //関数で過去の投稿を遡る
            print "";
            print "";
            print "";
            print "";
        }else{
            print "認証エラーです";
            print "<p>";
            print "<a href='login.php'>ログインページに戻る</a>";
            print "</p>";
        }

    ?>
    </div>
</body>
</html>