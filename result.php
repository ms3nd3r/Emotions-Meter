<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果発表/エモメーター</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="set.css">
</head>
<body>
    <?php
    $souhyou=htmlspecialchars($_POST["souhyou"],ENT_QUOTES,"UTF-8");
    $hap = htmlspecialchars($_POST["happy"],ENT_QUOTES,"UTF-8");
    $fun = htmlspecialchars($_POST["fun"],ENT_QUOTES,"UTF-8");
    $sad = htmlspecialchars($_POST["sad"],ENT_QUOTES,"UTF-8");
    $ang = htmlspecialchars($_POST["anger"],ENT_QUOTES,"UTF-8");
    $age = $_POST["age"];
    $sentence = file("sentence.txt");
    
    include 'getAPI.php';
    $pressure = $data["today"][22]["pressure"];
    $weather = "";
    if($data["today"][22]["weather"] == 100){
        $weather = "晴れ";
    }elseif($data["today"][22]["weather"] == 200){
        $weather = "くもり";
    }elseif($data["today"][22]["weather"] == 300){
        $weather = "雨";
    }else{
        $weather = "不明";
    }

    $goodComment = array("いい一日だったね！","最高だ！","よく頑張ったね！");
    $badComment = array("そういう日もある。","明日はきっと良いことあるよ。","今日はお疲れ様です。");

    $pts = $hap+$fun-$sad-$ang;
        $rnd = mt_rand(0,2);
        if($pts>75){
            $result= $pts."点！！<br>".$goodComment[$rnd]; //この文字列を変数化
            $day='goodDay';
            $msg='Gmsg';
        }elseif($pts>=25){
            $result=  $pts."点。<br>イイ感じですね！";
            $day='sosoDay';
            $msg='Smsg';
        }else{
            $result= $pts."点です。<br>".$badComment[$rnd];
            $day='badDay';
            $msg='Bmsg';
        }
    print "<div id=".$day.">"; //結果によってCSSの指定を変更
    print  '<p id="today">今日は・・・</p><p class="'.$msg.'">';
    print $result;//上の変数
    print "</p>";    

    print "<p class='resultPageText'>日記の雛形コーナー:</p>";
    print '<textarea name="" id="textBox" cols="70" rows="6">';
        print $sentence[$age];
    // 追加されたAge,Gend関数をもとに、日記の雛形を用意
    // 数値ごとに設定したひながたをここに初期値としてそのまま表示
        print "ちなみに今日の天気は". $weather."で、";
        print "気圧は". $pressure."hPaだった。";
    print '</textarea>';
    print "<p><上のテンプレートから日記に活用してください></p>";

    

    ?> <!--いい一日だったね！とかよく頑張った！とか点数に応じてポジティブな一言-->
    <hr>
    <p class='resultPageText'>今日の感情をツイートする:<a href="https://twitter.com/share?url=https://oguzemi2.sakura.ne.jp/Emotions_meter/&hashtags=エモメーター&text=<?php print $souhyou.":今日はこんな過ごし方で".$pts."点な一日でした。";?>"
    rel="nofollow"
    target="_blank" class="twitter-share-button"  data-show-count="false">tweet</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </p>
    </div>
    <footer>
        <div>
            <a href="./index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="back">ホームに戻る</a>
        </div>    
    </footer>

</body>
</html>