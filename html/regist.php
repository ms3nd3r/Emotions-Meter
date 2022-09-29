<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録用フォーム</title>
    <link rel="stylesheet" href="set.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
    <div class="main">
        <h1>Emotions/Meter</h1>
        <h2>アカウント登録</h2>
        <hr>
        <div id="registDisp">
            <p>※全ての欄を記入してください</p>
            <form action="confirm.php" method="post">
                <div>
                    <label>
                        アカウントID: 
                        <input type="text" name="ID" required>
                    </label>
                    <hr>
                </div>
                <div> 
                    <label>
                        パスワード: 
                        <input type="password" name="password" required>
                    </label>
                    <hr>
                </div>
                <div> 
                    <label>
                        生まれ年: <!--プルダウン-->
                        <select name="year">
                        <option value="error">選択してください</option>
                        <?php
                        for($i=1900;$i<=date('Y');$i++){
                            echo "<option value=".$i.">".$i."年</option>";
                        }
                        ?>
                        </select>
                    </label>
                    <hr>
                </div>
                <div> 
                    <label>
                        性別:
                        無回答<input type="radio" name="gender" value="0" checked>
                        男性<input type="radio" name="gender" value="1">
                        女性<input type="radio" name="gender" value="2">
                    </label>
                    <hr>
                </div>
                <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" value="アカウント登録">
            </form>
        </div>
    </div>
    <div class="backBtn">    
       <a href="./index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="back">ホームページに戻る</a>
    </div>
    <footer>
        <p>制作,村田/山本</p>
    </footer>

</body>
</html>