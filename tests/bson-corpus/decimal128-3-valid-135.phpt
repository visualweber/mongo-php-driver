--TEST--
Decimal128: [basx038] conform to rules and exponent will be in permitted range).
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('1800000013640079DF0D8648700000000000000000223000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "0.123456789012345"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
1800000013640079df0d8648700000000000000000223000
{"d":{"$numberDecimal":"0.123456789012345"}}
{"d":{"$numberDecimal":"0.123456789012345"}}
1800000013640079df0d8648700000000000000000223000
===DONE===