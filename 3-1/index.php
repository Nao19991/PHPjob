<?php

for($count=1;$count<=100;$count++) {
    if ($count%5 === 0 && $count%3 === 0) {
        echo "FizzBuzz!";
    } elseif ($count%5 === 0) {
        echo "Buzz!";
    } elseif ($count%3 === 0) {
        echo "Fizz!";
    } else {
        echo $count;
    }
    echo '<br>';
}

?>