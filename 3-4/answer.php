<link rel="stylesheet" href="index.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name =$_POST['name'];
$answer1 =$_POST['answer1'];
$answer2 =$_POST['answer2'];
$answer3 =$_POST['answer3'];

$correct_answer = ["80", "HTML", "select"];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judgement($answer, $answer_list, $question_number) {
if ($answer == $answer_list[$question_number-1]) {
    echo "正解！";
} else {
    echo "残念・・・";
}

}

?>
<p><?= $name ?> さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?= judgement($answer1, $correct_answer, 1) ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?= judgement($answer2, $correct_answer, 2) ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?= judgement($answer3, $correct_answer, 3) ?>