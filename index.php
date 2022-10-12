<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Crud PhPmvc</title>
    <script src="https://kit.fontawesome.com/c6d970a90e.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>

    <h1 class="text-center">register de la Promotion</h1>
       
           <?php
            include "model/conexion.php";
            include "contrôleur/delet.php";
           
           ?>
 
    <div class="container-fluid row">
        <form class="col-4" method="POST">
            <?php
            include "contrôleur/regesteoPromo.php";

            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom de la promotion</label>
                <input type="text" class="form-control" name="nam">

            </div>

            <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Submit</button>
        </form>
        <div class="col-8 p-4">
            <table id="myTable" class="table"> 
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "model/conexion.php";
                    $sql = $conexion->query("select * from promotion");
                    while ($data = $sql->fetch_object()) { ?>
                        <tr>

                            <td><?= $data->id ?></td>
                            <td><?= $data->Name ?></td>



                            <td>
                                <a href="edite.php?id=<?= $data->id ?>" class="btn btn-small btn-warning"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                <a href="index.php?id=<?= $data->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>

                            </td>
                        </tr>
                    <?php }

                    ?>

                </tbody>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>

</html>