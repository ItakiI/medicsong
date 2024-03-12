<?php
if (empty($_GET['id'])) 
    header('Location: /index.php');

else
    require __DIR__ . '/utilities/header.php';    
    $picture = isset($_FILES['name_picture']) ? $_FILES['name_picture'] : FALSE;
    $ext = array('png','jpg','jpeg','');
    $id = intval($_GET['id']);
    $wine = findWine($db, $id);
    
    if (!empty($_POST['submit']) 
    || (!empty($_POST['castle']) && $_POST['castle'] != $wine['castle']) 
    || (!empty($_POST['origin']) && $_POST['origin'] != $wine['origin']) 
    || (!empty($_POST['year']) && $_POST['year'] != $wine['year'])
    || (!empty($_POST['description']) && $_POST['description'] != $wine['description'])
    || (!empty($_POST['name_grappe']) && $_POST['name_grappe'] != $wine['name_grappe'])
    || (!empty($_FILES['name_picture']) && $_FILES['name_picture'] != $wine['name_picture'])
    ) {
        if ($picture['error'] === 0){
            $img_name = uniqid() . '.' . (pathinfo($picture['name'], PATHINFO_EXTENSION));
            @mkdir(__DIR__ . '/assets/img/', 0755);

            $img_folder = __DIR__ . '/assets/img/';
            $dir = $img_folder . $img_name;

            $move_file = @move_uploaded_file($picture['tmp_name'], $dir);

            if($move_file){
                $wine['name_picture'] = $img_name;
                }else{
                    echo 'Une erreur s\'est produite lors du telechargement du fichier, merci de renouveler votre demande.';
                }
        }
        if (!empty($_POST['description'])){
        $desc = htmlentities($_POST['description'], ENT_QUOTES);
        }else{
            $desc = NULL;
        }
        $wine = array(
            'id'            => $_GET['id'],
            'castle'        => htmlentities($_POST['castle'], ENT_QUOTES),
            'origin'        => htmlentities($_POST['origin'], ENT_QUOTES),
            'year'          => htmlentities($_POST['year'], ENT_QUOTES),
            'id_grappe'     => htmlentities($_POST['id_grappe'], ENT_QUOTES),
            'description'   => $desc,
            'name_picture'  => $wine['name_picture'],
        );
        if (updateWine($db, $wine))
            header('Location: index.php');
        else
            echo 'Erreur lors de la modification !';       
    }
?>
<div class="formulaire">
    <form method="POST" id="first_form" enctype="multipart/form-data" action="">
        Chateau : <input type="text" class="btn-in" name="castle" value="<?php echo $wine['castle'] ?>"><br>
        Origine : <input type="text" class="btn-in" name="origin" value="<?php echo $wine['origin'] ?>"><br>
        AnnÃ©e : <input type="textarea" class="btn-in" name="year" value="<?php echo $wine['year'] ?>"><br>
        Description : <textarea class="btn-in textarea" name="description"><?php echo $wine['description'] ?></textarea><br>
        Type de vin : 
        <select class="btn grappe" name="id_grappe">
            <?php
                function selectAll ($db){
                    $sql = "SELECT *
                    FROM grappes 
                    ORDER BY id 
                    DESC"; 
                    $query = $db->query($sql);
                    return $query->fetchAll(PDO::FETCH_ASSOC);   
                }
                
                $grappes = selectAll ($db);
                foreach ($grappes as $grappe) {
                    echo '<option value="' . $grappe['id'] . '">' . $grappe['name_grappe'] . '</option>';
                    if ($wine['id_grappe'] === $grappe['id']) :
                        echo '<option selected="' . $wine['id_grappe'] . '">' . $grappe['name_grappe'] . '</option>';
                    endif;
                }
            ?>

        </select><br>
                <label for="name_picture" class="btn picture-file">Choisir une image</label>
                <input type="file" class="file" name="name_picture">
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000"><br>
        <input type="submit" name="submit" value="Modifier le vin" class="btn"><br>
    </form>
</div>
<?php
include ('./utilities/footer.php'); 
?>   