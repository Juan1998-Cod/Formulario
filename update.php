<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id;";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$apellido=$row['apellido'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,name='$name',apellido='$apellido',email='$email',mobile='$mobile',password='$password'
    where id=$id";
    $result = mysqli_query($con,$sql); 
    if($result){
       echo "updated successfully";
      //  header('location:display.php');
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
    placeholder="enter your name" name="name"  autocomplete="off" value=<?php echo $name; ?>>
  </div>
 <div  class="from-group">
    <label>apellido</label>
    <input type="email" class="form-control" 
    placeholder="enter your email" name="email" autocomplete="off" value=<?php echo $apellido; ?>>
  </div>
  <div class="from-group">
    <label>Email</label>
    <input type="email" class="form-control" 
    placeholder="enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
  </div>
  <div class="from-group">
    <label>Mobile</label>
    <input type="text" class="form-control" 
    placeholder="enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
  </div>

  <div class="from-group">
    <label>Password</label>
    <input type="text" class="form-control" 
    placeholder="enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
  </div>
  <button type="submit" class="btn btn-primary my-5"name="submit">update</button>
</form>
    </div>
  </body>
</html>