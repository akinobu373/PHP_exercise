<?php

$age = 20;

if ($age > 20) {
    echo 'あなたは成人です' . '<br>';
}elseif($age ==20){
    echo '成人式ですね' .'<br>';
}elseif($age ==19){
    echo 'もう少しで成人式ですね' .'<br>';
}
else{
    echo 'あなたは未成年です', '<br>';
}

// 厳密演算子
// 数値の18と文字列の'18'を比較
if ($age !== '18') {
    echo '値とデータ型が一致していません' . '<br>';
}

// ちなみに条件式もvar_dump()で見ることができる
var_dump($age < 20);

echo '<br>';

var_dump($age !== '18');

