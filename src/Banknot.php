<?php
function calculatebanknotes(float $amount): array {

    $notes = [50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1];
    $response = [];
    $state = $amount;
    foreach ($notes as $item) {
        if($state < 0) {
            break;
        }

        if($state >= $item) {
            $supply = (int)($state / $item);
            $state -= $supply * $item;
            $response[$item] = $supply;
        }


    }

    return $response;
}