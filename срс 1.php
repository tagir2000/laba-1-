//#1 ч1
<?php
$var = 'a,b';
$var[0] = '3';
$var[1] = '1';
echo $var;


//#2

$a = 10;
$b = 2;
$var = ($a+$b)/2;
$var = ($a-$b)/2;
$var = ($a*$b)/2;
$var = ($a/$b)/2;
echo $var;

//#3

$c = 15;
$d = 2;
$var = $c+$d;
$result = $c+$d;
return $result;

//#4

$a = 10;
$b = 2;
$c = 5;
$var = ($a+$b+$c)/2;
echo $var;
#5
$a = 17;
$b = 10;
$c = $a-$b;
$d = 17;
$result = ($c+$d);
return $result;
// ч2 #1

$arr = ['Привет,','мир!'];
$text = $arr[0].$arr[1].$arr[2];
$arr = ['Моя','первая','программа'];
echo $arr;

//#2
$text1 = 'Привет,';
$text2 = 'мир!';
echo  $text1.$text2;

//#3
$arr = ['Привет,','%имя%!'];
$arr[1] = 'Тагир!';
var_dump($arr);

//#4
$age = '1';
$height = '2';
$arr =['Мой','возраст:','%Возраст%','|','Мой','рост:','%Рост%'];
$arr[3] = $age;
$arr[7] = $height;
var_dump($arr);
//#5
$text = ['a','b','c','d','e'];
echo $text[1].$text[3].$text[5];

//Ч3 #1
$arr = ['a','b','c'];
echo  $arr[0].$arr[1].$arr[2];
//#2
$arr = ['a','b','c'];
$arr = $arr[0].$arr[1].$arr[2];
var_dump($arr);
//#3
$arr = ['a','b','c','d'];
$arr1 = [0]+[1];
$arr2 = [2]+[3];
$arr3 = [0]-[3];
$arr4 = [0]/[3];
var_dump($arr);
#4
$arr = ['2','5','3','9'];
$result =([0]*[1])+([2]*[3]);
var_dump($result);
#5
$arr = ['1', '2', '3', '4', '5'];
$arr[] = 1;

$arr[] = 2;

$arr[] = 3;

$arr[] = 4;

$arr[] = 5;
var_dump($arr);
?>

