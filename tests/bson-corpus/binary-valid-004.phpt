--TEST--
Binary type: subtype 0x02
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('13000000057800060000000202000000ffff00');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toJSON($bson)), "\n";

$json = '{"x" : {"$binary" : "//8=", "$type" : "02"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
13000000057800060000000202000000ffff00
{"x":{"$binary":"\/\/8=","$type":"02"}}
{"x":{"$binary":"\/\/8=","$type":"02"}}
13000000057800060000000202000000ffff00
===DONE===