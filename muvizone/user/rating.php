<?php

    $star = "<li><a href='#'><i class='fa fa-star' aria-hidden='true'></i></a></li>";
    $total_stars = (int)($product_review / 2);

    for ($i=0; $i < $total_stars ; $i++) {
        if ($i === 5) {
            break;
        }else{
            echo $star;
        }
    }
?>
