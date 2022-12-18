<?php
$f_echo=0;
$f_1=0;
$f_2=1;

echo "$f_1\n";
echo "$f_2\n";
while($f_echo<=10000){
    $f_echo=$f_1+$f_2;
    echo "$f_echo\n";
    $f_1=$f_2;
    $f_2=$f_echo;
}
