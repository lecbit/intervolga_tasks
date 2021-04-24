<?php
$a = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit sodales leo, in eleifend lectus interdum et. In pellentesque libero at mi viverra, non faucibus metus tristique. Vestibulum aliquam cursus dapibus.';
$link = '#';

$a = mb_substr($a, 0, 180);

$b = explode(' ',$a);

$temp = count($b);

for ($i=0; $i < $temp; $i++) {
    if($b[count($b)-1]=='')
    {
        unset($b[count($b)-1]);
    }
    else
    {
        break;
    }
}


$b[count($b)-2] = "<a href='{$link}'>{$b[count($b)-2]}";
$b[count($b)-1] = "{$b[count($b)-1]}...</a>";

$b = implode(' ',$b);

echo $b;
?>