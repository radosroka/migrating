#!/bin/env php
<?php


$xml_file = file_get_contents($argv[1]);

$array = simplexml_load_string($xml_file);

print_r($array->SHOPITEM[2000]);
?>
