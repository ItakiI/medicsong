<?php

require_once __DIR__ . '/config/cdb.php';
// require_once __DIR__ . '/function/perso.fn.php';

// try {
//     $result = addAllPerso($bdd);
// } catch (Exception $e) {
//     echo $sql . "<br>" . $e->getMessage();
// }

try {
    
    $sql = "SELECT * FROM perso_has_spec JOIN perso ON perso_has_spec.perso_id = perso.id JOIN spec ON perso_has_spec.spec_id = spec.id";
    $result = $bdd->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    

} catch (Exception $e) {
    echo $sql . "<br>" . $e->getMessage();
}

