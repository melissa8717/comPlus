<?php

$json = json_decode(file_get_contents("cartes.json"));

$carte = array($json);
$carteObject = new ArrayObject($json);
$carteObject->ksort();

foreach ($carteObject as $key => $val) {
    echo "$key = $val\n";
}

