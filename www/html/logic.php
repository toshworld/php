<?php

const WORD = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$api_name = 'AAA_API';

//apiのタイプを判別する関数
function api_type_determine($api_type)
{
    switch ($api_type){
        case 'AAA_API':
            return 'aaa';

        case 'BBB_API':
            return 'bbb';

        case 'CCC_API':
            return 'bb';
    }
}

//idを生成する関数
function create_id($api_name, $length = 14, $word = WORD)
{
    return api_type_determine($api_name).substr(str_shuffle(str_repeat($word, $length)), 0, $length);
}

echo create_id($api_name); 

?>