
<?php echo "good morning"."\n";?>
<?php echo "good afternoon"."\n";?>
<?php echo "good evening"."\n";?>
<?php echo "good morning";?>
<?php echo "good afternoon";?>
<?php echo "good evening";?>
<?php
$num = 1;
$num01 = 2;
$num0_01 = 3;
echo $num;
echo $num."/n";
echo $num01."/n";
echo $num0_01."/n";
$num001 = 123;
$num002 = 1.23;
echo $num001."\n";
echo $num002."\n";

echo gettype($num001)."\n";
echo gettype($num002)."\n";
var_dump($num002)."\n";
$string_a = "hello,world!";
echo $string_a."\n";
echo gettype($string_a)."\n";
$a = 10;
$b = 1;
$c = ($a > $b);
echo $c."\n";
echo gettype($c)."\n";

$p = ["sato","kim","takashi"];
$p[1] = "baka";

$o = [["sato","kim","takashi"],["hoanahdao","hoalan"]];

$x = 10;
$y = 5;
$z = 10;
echo($x + $y)."\n";
echo($x - $y)."\n";
echo($x * $y)."\n";
echo($x / $y)."\n";
echo($x % $y)."\n";

echo($x > $y)."\n";
echo($x < $y)."\n";
echo($x <= $z)."\n";
echo($x >= $z)."\n";
echo($x == $z)."\n";
echo($x != $z)."\n";
echo($y >= 5 && $x <= 10)."\n";
echo($x >= 5 && $y <= 10)."\n";
echo($y == 3 || $x == 3)."\n";
echo($y == 5 || $x == 5)."\n";
$x++;
$y--;
echo($x)."\n";
echo($y)."\n";
if ($x = 10) {
    echo("đúng rồi đó");
}
if ($x > 10) {
    echo("hoho");
} else {
    echo("haha");
}

if ($x >= 10) {
    echo("X lớn hơn hoặc bằng 10");
} else if ($x >= 0) {
    echo("X lớn hơn hoặc bằng 0 và nhỏ hơn 10");
} else {
    echo("x nhở hơn 0");
}

for($h = 0;$h <= 4;$h++){
echo $h."\n";
}

for($k = 0;$k <= 4;$k++){
    if (k ==3) {
        break;
    }
    echo $k."\n";
    }

    for($h = 0;$h <= 4;$h++){
        for($k = 0;$k <= 4;$k++){
    echo $h. "-" .$k."\n"; 
        }
    }

for($q = 1;$q <= 10;$q++){
if($q == 3){
    continue;
}else if($q == 7){
    break;
}else{
    echo $q."\n";
}
    }