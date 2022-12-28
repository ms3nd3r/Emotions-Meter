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
    <title>ログイン画面です</title>
</head>
<body>
    <div class="main">
        <div class="top">
            <h1>Emotions/Meter</h1>
        </div>
        <hr>
        <form action="mypage.php" method="post">
            <div id="loginDisp">  
                <div id="login">
                    <div>
                        <p>ログイン</p>
                        <hr>
                        <label>
                            ID: <br>
                            <input type="text" name="ID">
                        </label>
                    </div>   
                    <div> 
                        <label>
                            パスワード: <br>
                            <input type="password" name="password">
                        </label>
                    </div>
                    <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" value="ログイン">
                </div>
                <div id="regist">
                    <p>アカウント作成</p>
                    <hr>
                    <p>アカウントを作成してできること</p>
                    <ul>
                        <li>日記の保存/参照ができる</li>
                        <li>自分に合わせた日記のテンプレートがもらえる</li>
                    </ul>
                    <p>アカウントを作成してよりエモメーターを使いこなそう！</p>
                    <a href="./regist.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">アカウントを作成</a>
                </div>
            </div>
        </form>
    </div>
    <div class="backBtn">    
       <a href="./index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="back">ホームページに戻る</a>
    </div>
    <footer>
        <p>制作,村田/山本</p>
    </footer>
</body>
</html>