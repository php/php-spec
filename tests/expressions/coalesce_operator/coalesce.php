<?php

$var = 7;
$var2 = NULL;

$obj = new StdClass;
$obj->boo = 7;

$arr = [
  2 => 7,
  "foo" => "bar",
  "foobar" => NULL,
  "qux" => $obj,
  "bing" => [
    "bang"
  ]
];

function foobar() {
  echo "called\n";
  return ['a'];
}

var_dump($nonexistant_variable ?? 3);
echo PHP_EOL;
var_dump($var ?? 3);
var_dump($var2 ?? 3);
echo PHP_EOL;
var_dump($obj->boo ?? 3);
var_dump($obj->bing ?? 3);
var_dump($arr["qux"]->boo ?? 3);
var_dump($arr["qux"]->bing ?? 3);
echo PHP_EOL;
var_dump($arr[2] ?? 3);
var_dump($arr["foo"] ?? 3);
var_dump($arr["foobar"] ?? 3);
var_dump($arr["bing"][0] ?? 3);
var_dump($arr["bing"][1] ?? 3);
echo PHP_EOL;
var_dump(foobar()[0] ?? false);
echo PHP_EOL;
function f($x)
{
    printf("%s(%d)\n", __FUNCTION__, $x);
    return $x;
}

$a = f(null) ?? f(1) ?? f(2);
