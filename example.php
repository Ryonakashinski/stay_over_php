<?php

echo 'hey';


// 変数の定義は$必須
// 行末には「;」必須
$number = 100;
$str = "はじめてのPHP";

echo $number;
var_dump($number);


// 配列
// $array[0]などで取得可能
$array1 = ["JavaScript", "PHP", "Swift", "Haskell"];

// キー名を指定することもできる（jsのオブジェクト的な感じ）
echo $array1[3];
var_dump($array1);
// $array2["サーバ"]などで取得可能
$array2 = [
  "フロント" => "JavaScript",
  "サーバ" => "PHP",
  "iOS" => "Swift",
  "関数型" => "Haskell"
];
echo $array2['サーバ'];
var_dump($array2);



$number = rand(0,1);
if($number=== 1){
  echo'yes';
}else{
  echo 'no';
}

$random_number = rand(1,5);
if ($random_number === 1){
  $result = 'Great';
}elseif($random_number === 2){
  $result = 'Good';
}elseif($random_number === 3){
  $result = 'so so';
}elseif($random_number === 4){
  $result = 'bad';
}elseif($random_number === 5){
  $result = 'worst';
}
echo $result;
