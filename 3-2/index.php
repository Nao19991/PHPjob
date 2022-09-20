<?php

    $fruits = ["りんご" => 100, "みかん" => 150, "もも" => 500];
    $quantity =[3, 1, 6];
    $i = 0;

    function totalCost($a, $b){
        $total = $a * $b;
        return $total;
    }

    foreach ($fruits as $key => $price) {
            $total_price = totalCost($price, $quantity[$i]);
            print $key."は".$total_price."円です。";
            echo '<br>';
            $i++;
    }

?>