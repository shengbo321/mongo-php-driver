--TEST--
MongoDB\BSON\Decimal128::__set_state()
--SKIPIF--
<?php if (!class_exists('MongoDB\BSON\Decimal128')) { die('skip MongoDB\BSON\Decimal128 is not available'); } ?>
--FILE--
<?php

$tests = [
    '1234.5678',
    '-1234.5678',
    'Infinity',
    'INF',
    'NaN',
    'NAN',
];

foreach ($tests as $value) {
    var_export(MongoDB\BSON\Decimal128::__set_state([
        'dec' => $value,
    ]));
    echo "\n\n";
}

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
MongoDB\BSON\Decimal128::__set_state(array(
   'dec' => '1234.5678',
))

MongoDB\BSON\Decimal128::__set_state(array(
   'dec' => '-1234.5678',
))

MongoDB\BSON\Decimal128::__set_state(array(
   'dec' => 'Infinity',
))

MongoDB\BSON\Decimal128::__set_state(array(
   'dec' => 'Infinity',
))

MongoDB\BSON\Decimal128::__set_state(array(
   'dec' => 'NaN',
))

MongoDB\BSON\Decimal128::__set_state(array(
   'dec' => 'NaN',
))

===DONE===
