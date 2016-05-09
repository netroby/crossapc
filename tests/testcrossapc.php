<?php
include dirname(__DIR__)."/src/crossapc.php";

use netroby\crossapc\crossapc;

$a = "testdemokey";

echo $a;
crossapc::store('mykey', $a, 30);
var_dump(crossapc::exists('mykey'));
var_dump(crossapc::fetch('mykey'));
var_dump(crossapc::delete('mykey'));
var_dump(crossapc::exists('mykey'));
var_dump(crossapc::fetch('mykey'));