<?php
// 1〜10 までを足した値を返す関数
function sum($mini,$max){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり 10 より大きくなるまでループする
    for($i = $mini; $i <= $max; $i++){

        // $result に　$i を順番に足していく
        $result += $i;
    }

               // $result を結果として返す
    return $result;
}

echo sum(5,10);
echo "\n";
echo sum(400,500);

function calc($strType, $little) {
   if($strType == "レギュラー"){
        $kakaku = 120 * $little;
    }else{
        $kakaku = 150 * $little;
    }
    return $kakaku;
}
echo "\n";
echo calc("レギュラー", 10);
echo "\n";
echo calc("ハイオク", 10);
echo "\n";
?>
