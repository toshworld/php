<?php

$dogs = array(
                "可愛い" => "柴犬",
                "いかつい" => "ブルドック",
                "キモイ" => "チワワ",
                "かっこいい" => "ドーベルマン"
            );

foreach($dogs as $key => $value){
    if($key=="可愛い"){
        echo "めちゃくちゃ".$key."ぜ".$value;
    }
}


?>