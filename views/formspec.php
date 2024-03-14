<?php
require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/components/head.php'; 
require_once dirname(__DIR__) . '/components/header.php';
 ?>
  
<form action="ajoutspec.php" method="post">
<div>
    <label for="spec">Spécialités</label>
    <input type="text" name="spec" id="spec" >
</div>
<br>
<div>   
    <button type="submit">Enregistrer les modifications</button>  
    
</div>
</form>

<?php require_once dirname(__DIR__) . '/components/footer.php'; ?>