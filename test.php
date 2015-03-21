<pre>
<?php

$arr=[1,10,20,40,7,5,55];
$a=5;

foreach ($arr as $item) {
    var_dump($item!=$a);
}



//empty()  - isset()   check if var empty or not set  - true/false
//is_array()  - check if is this array
//is_numeric()-is numeric ,   is_null()-if NULL

$a = 40;
$b = 1;
$res= $a > $b && $a; 
var_dump ($res);

//HOW TO ADD NEW next ELEMENT TO ARRAY:  $arr[]=val;

$mas=[];
$mas=[1,2,4];

foreach ($mas as $i)
{
    if($i<2){
       continue; //break to break cycle
    }
    echo $i.'<br>';
}

$mas=[];
$mas=[
    ['cat','dog'],
        ['cat1','dog1'],
            ['cat3','dog3']
];
for ($i=0; $i<count($mas); $i++)
{
 for ($j=0;$j<count($mas[$i]);$j++)
 {
   echo $mas[$i][$j].'<br>';
 }
}
//rand()  -generate rand num
//global  - declare global var


function generate($num)
{
    return $num*$num/rand(1,$num);
            
}

echo generate(3);
//commit 2

function generate1($max) {
    $arr = [];
    for ($i = 0; $i < $max; $i++) {
        $arr[$i] = rand (0, $max);
    }
    return $arr;  
}
$arr=generate1(5);
var_dump($arr);

//include 'fileneame  
////require_once ''
//change 2
/*
 Разработать и вызвать функцию generate(max), которая генерирует случайный массив с max элементов (элементы массива - целые числа, массив неассоциативный). Разработать функцию array_sort, которая будет принимать массив и сортировать его по-возрастанию. При разработке нельзя использовать встроенные в php функции сортировки массивов. Желательно использовать алгоритм сортировки "пузырьком" 
 * */
 //
 
?>
