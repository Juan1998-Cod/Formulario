<?php
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" >
</head>
<body>

    <div class="conteiner">
        <button class="btn btn-primary my-5"><a href="user.php"
        class="txt-light">add user</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">CC </th>
      <th scope="col">Nombre </th>
      <th scope="col">Apellido </th>
      <th scope="col">correo</th>
      <th scope="col">celular</th>
      <th scope="col">contraseña</th>
      <th scope="col">Operacion</th>
    <tr>
  </thead>
  <tbody>
    <?php

    $sql="select * from crud ";
    $result=mysqli_query($con,$sql);
    if ($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $apellido=$row['apellido'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            echo' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$apellido.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>  
            <button class="btn btn-primary"><a href="update.php?
            updateid='.$id.' "class="text-light"> Update</a></button>

            <button class="btn btn-danger"><a href="delete.php?
            deleteid='.$id.'"> delete </a></button>
          </td>  
          </tr>';
        }
    }
    ?>
  </tbody>
</table>
    </div>

</body>
</html>