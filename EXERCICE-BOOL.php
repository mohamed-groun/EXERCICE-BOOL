<?php
$a="0";
$b="TRUE";
$c=FALSE;
$d=($a OR $b);
$e=($a AND $c);
$f=($a XOR $b);

var_dump((bool) $a);
var_dump((bool) $b);
var_dump((bool) $c);
var_dump((bool) $d);
var_dump((bool) $e);
var_dump((bool) $f);