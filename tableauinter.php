<?php

require_once 'cdb.php';


try {
    
    $sql = "SELECT *
            FROM perso_has_spec
            JOIN perso ON perso_has_spec.perso_id = perso.id  
            JOIN spec ON perso_has_spec.spec_id = spec.id";
    
    $result = $bdd->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    

} catch (Exception $e) {
    echo $sql . "<br>" . $e->getMessage();
}

// $result est notre tableau intermédiaire

//   var_dump($result);

// foreach  ($result as $row) {
  
//         echo "Nom: " . $row["name"]. "<br>";
//         echo "Échantillon: " . $row["echantillon"]. "<br>";
//         echo "Image: " . $row["image"]. "<br>";
//         echo "Description: " . $row["description"]. "<br>";
//         echo "Signature: " . $row["signature"]. "<br>";
//         echo "Spécialité: " . $row["spec"]. "<br>";
//         echo "id: " . $row["id"]. "<br><br>";
//     }
