<?php

require_once __DIR__ . '/config/cdb.php';
require_once __DIR__ . '/function/perso.fn.php';

try {
    $result = addAllPerso($bdd);
} catch (Exception $e) {
    echo $sql . "<br>" . $e->getMessage();
}


