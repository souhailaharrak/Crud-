<?php

if(!empty($_GET["id"])){

    $id=$_GET["id"];
    $sql =$conexion -> query("delete from promotion where id=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success col-3" role="alert" > supprimé avec succès </div>';
    } else {
        echo '<div class="alert alert-danger"> Erreur </div>';

    }
    
}

?>