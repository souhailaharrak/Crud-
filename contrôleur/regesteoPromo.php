<?php
if(!empty($_POST["btnregister"])){

    if(!empty($_POST["nam"])){

$promotion=$_POST["nam"];

$sql=$conexion ->query("insert into promotion(Name) values('$promotion')");
if($sql==1){
    echo '<div class="alert alert-success" role="alert"> promotion  inscrite correctement</div>';
}else{
        echo '<div class="alert alert-danger" role="alert">erreur lors de enregistrement une promotion</div>';
}
    }else{
 echo '<div class="alert alert-danger" role="alert">
     entrée est vide
         </div>';

    }
       
   
}
?>