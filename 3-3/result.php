<?php
$numbers = $_POST['numbers'];
$rand_count = -1 + mt_rand(1, mb_strlen($numbers));
$rand_num = substr($numbers, $rand_count ,1);
switch ($rand_num) {
    case '0';
        $result = "凶";
        break;
    case '1';
    case '2';
    case '3';
        $result = "小吉";
        break;
    case '4';
    case '5';
    case '6';
        $result = "中吉";
        break;
    case '7';
    case '8';
        $result = "吉";
        break;
    case '9';
        $result = "大吉";
        break;
}
?>
<p><?php echo date("Y/m/d", time()); ?>の運勢は</p>
<p>選ばれた数字は<?php echo $rand_num; ?></p>
<p><?php echo $result; ?></p>
