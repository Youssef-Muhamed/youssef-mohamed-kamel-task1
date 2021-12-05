<?php
$units = 50;
$choose_total_price = true;

//  All first Slide
$first_slide = 50;
$price_first_slide = 3.5;
$total_first_price = $first_slide * $price_first_slide;

// Second slide
$second_slide = 100 ;
$price_second_slide = 4;
$total_second_price = $second_slide * $price_second_slide;

// third slide
$third_slide = $second_slide + $first_slide;
$price_third_slide = 6;
$total_thrid_price = $total_first_price + $total_second_price;

if ($choose_total_price) {

    if ($units >= 0 && $units <= $first_slide) {
        echo "The Price Is " . ($units * $price_first_slide);
    } elseif ($units > $first_slide && $units <= $third_slide) {
        echo "The Price Is " . ((($units - $first_slide) * $price_second_slide) + $total_first_price);
    } elseif ($units > $third_slide) {
        echo "The Price Is " . ((($units - $third_slide) * $price_third_slide) + $total_thrid_price);
    } else {
        echo "Please Enter Valid Number";
    }
} else {

    if ($units >= 0 && $units <= $first_slide) {
        echo "The Price Is " . ($units * $price_first_slide);
    } elseif ($units > $first_slide && $units <= $third_slide) {
        echo "The Price Is " . ($units * $price_second_slide);
    } elseif ($units > $third_slide) {
        echo "The Price Is " . ($units * $price_third_slide);
    } else {
        echo "Please Enter Valid Number";
    }
}