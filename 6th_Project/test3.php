<?php

$p2 = array(
    'Lv_1' => array(
        '메이플_헤네시스' => "달팽이", 
        '메이플_커닝시티' => "버섯",
        '메이플_리스항구' => "스포어"),
    'Lv_5' => array(
        '던파_어썬' => "좀비",
        '던파_어킹' => "나이트",
        '던파_안톤' => "거북이"),
    'Lv_10' => array(
        'LOL_도란검' => "ADC",
        'LOL_도란방패' => "TOP",
        'LOL_도란반지' => "AP")
    );

    echo "<pre>";
    foreach($p2 as $a => $b)
    {
        foreach($b as $c => $d)
        {
            echo "$a:\:t$c\t($d)<br>";
        }
    echo "</pre>";
    }

?>