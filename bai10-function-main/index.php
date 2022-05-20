<?php
function tong($a, $b){
    return $a + $b;
}

$m = 9;
$n = 6;
$t = tong($m, $n);
echo "Tong: $t";
?>
<?php
function hello($message){
    echo 'Welcome'. $message;
}

hello('PHP');
?>
<?php
function setName($name = 'noname'){
    echo $name;
}
setName('PHP');
echo '<br>';
setName();
?>
<?php
function setValue($a){
    $a = 10;
}

$b = 5;
setValue($b);

echo $b;
?>