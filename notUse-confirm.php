<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="set.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>
<body>
    <div class="main">
        <h1>Emotions/Meter</h1>
        <hr>
    <?php
/*
        try {
        /// DB接続を試みる
        $db  = new PDO(XXXXXXXXXXXX);

        $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
        $isConnect = false;
        $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
        }
*/
        if($_POST['year']=="error"){
            echo "<div id='error'>生まれ年選択エラー</div>";
        }
        if(isset($_POST['user'])) {
        $dsn='XXXXXXXXX';
        $user='XXXXXXXXX';
        $password='XXXXXXXXXX';
        $dbh = new PDO($dsn,$user,$password);
        $stmt = $dbh->prepare("INSERT INTO USER VALUES(:ID,:password,:year,:gender)");
        $stmt->bindParam(':ID', $_POST['user']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->bindParam(':year', $_POST['year']);
        $stmt->bindParam(':gender', $_POST['gender']);
        $stmt->execute();
        }
    ?>
     <p><?php echo $msg; ?></p>
    </div>
</body>
</html>
