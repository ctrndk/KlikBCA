<?php
require "vendor/autoload.php";

use KlikBCA\KlikBCA;

$cred = json_decode(file_get_contents("a.tmp"), true);


$st = new KlikBCA($cred['user'], $cred['pass']);
print_r($st->login());