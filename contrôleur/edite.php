<?php

if(!empty($_POST["btnregiste"])){
    if(!empty($_POST["nam"])){
         $name=$_POST["nam"];
         $id=$_POST["id"];
         
         $sql=$conexion ->query("update promotion set Name='$name' where id=$id");

         if ($sql==1) {
            header("location:index.php");
         } else {
            echo  '<div class="alert alert-danger">
                          error de modifier la promotion
        </div>';
         }
         
    }else{
        echo  '<div class="alert alert-warning">
        empty fields
          </div>';
       
    }
    
}
