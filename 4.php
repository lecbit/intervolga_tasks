<?php
$arr = array();
$arr2 = array(0);


$num = 2;

for ($i=0; $i < 100; $i++) {
    $arr[] = rand(1,3);
}

for ($i=0; $i < 100; $i++) {
    echo $arr[$i].', ';
}

echo '<br><br>';

for ($i=0; $i < 99; $i++) {
    if($arr[$i] == $arr[$i+1])
    {
        if(empty($arr2[array_key_last($arr2)]))
            {
                $arr2[array_key_last($arr2)] = [1=>$arr[$i],2=>2];
            }
        elseif($arr2[array_key_last($arr2)][1] == $arr[$i])
        {
                $arr2[array_key_last($arr2)][2]++;
                $arr2[array_key_last($arr2)][2] = $arr2[array_key_last($arr2)][2]++;
        }
        else
        {
            $arr2[] = [1=>$arr[$i],2=>2];
        }
    }
    else
    {
        if(!empty($arr2[array_key_last($arr2)]))
        {
            $arr2[] = array();
        }        
    }
}

if(empty($arr2[array_key_last($arr2)])) //Удаляю последний пустой массив, если такой был создан на строке 39
{
    unset($arr2[array_key_last($arr2)]);
}

for ($i=0; $i < count($arr2); $i++) { 
    for ($j=0; $j < $arr2[$i][2]; $j++) { 
        echo $arr2[$i][1].', ';
    }
    echo '___';
}

for ($i=0; $i < count($arr2); $i++) {
    echo '<br>цифра: '.$arr2[$i][1].' выведена '.$arr2[$i][2].' раз/a';
}

?>