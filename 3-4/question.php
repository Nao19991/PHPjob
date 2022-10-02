<link rel="stylesheet" href="index.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name =$_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = ["80", "22", "20", "21"];
$question2 = ["PHP", "Python", "JAVA", "HTML"];
$question3 = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>

<p>お疲れ様です<?= $name ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
        <input type="hidden" name = "name" value = <?= $name ?> />

<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($question1 as $selectAnswer1) :?>
        <input type="radio" name="answer1" value= <?= $selectAnswer1 ?> /><?= $selectAnswer1 ?>
<?php endforeach;?>
<br>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($question2 as $selectAnswer2) :?>
        <input type="radio" name="answer2" value= "<?= $selectAnswer2 ?>" /><?= $selectAnswer2 ?>
<?php endforeach;?>
<br>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($question3 as $selectAnswer3) :?>
        <input type="radio" name="answer3" value= "<?= $selectAnswer3 ?>" /><?= $selectAnswer3 ?>
<?php endforeach;?>
<br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="submit" value="回答する" />
</form>