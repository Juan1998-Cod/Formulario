<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="insert into crud(name,apellido,email,mobile,password) values('$name','$apellido','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql); 
    if($result){
       // echo "data inserted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" >
    <title>Crud Operation </title>
  </head>
  <body>
    <div class="container my-5">
    <form  method="post">
  <div class="from-group">
    <label>Name</label>
    <input type="text" class="form-control" 
    placeholder="nombre completo" name="name"  autocomplete="off">
  </div>
  <div class="from-group">
    <label>Apellido</label>
    <input type="text" class="form-control" 
    placeholder="enter your apellido" apellido="apellido" autocomplete="off">
  </div>
  <div class="from-group">
    <label>Email</label>
    <input type="email" class="form-control" 
    placeholder="enter your email" name="email" autocomplete="off">
  </div>
  <div class="from-group">
    <label>Mobile</label>
    <input type="text" class="form-control" 
    placeholder="enter your mobile number" name="mobile"autocomplete="off">
  </div>
  <div class="from-group">
    <label>Password</label>
    <input type="text" class="form-control" 
    placeholder="enter your password" name="password"autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary my-5"name="submit">enviar</button>
</form>
    </div>
  </body>
</html>