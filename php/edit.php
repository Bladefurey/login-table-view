<?php
include("users.php");
if(isset($_POST['edit'])){
    $id=$_GET['id'];
$name=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql="update user set name='$name',email='$email',phone='$phone',address='$address' where id='$id' ";
$result=mysqli_query($connection,$sql);
if(!$result){
    echo mysqli_error($connection);
}
else{
    header("location:display.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Admin | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
  </head>
  <body>
	  <div id="login-page">
	  	<div class="container">
		      <form  method="post">
                   <?php
                   $id=$_GET['id'];
                   $result=mysqli_query($connection,"select * from user where id='$id'");
                   while($row=mysqli_fetch_assoc($result)){

                   ?>  
		        <h2 >Host Myanmar(Mandalay)</h2>
		        <div >
		            <input type="text" id="name" name="username" class="form-control" value="<?php echo $row['name']; ?>" >
                    <span id="nameerror" style="color:red"></span>
		            <br>
		            <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" ><br >
                    <span id="pwerror" style="color:red"></span>
                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" >
                    <span id="phoneerror" style="color:red"></span>
                <br>
                <input type="address" id="address" name="address" class="form-control" value="<?php echo $row['address']; ?>" >
                    <span id="addresserror" style="color:red"></span>
		            <br>

                
		            <input  name="edit" class="btn btn-primary" type="submit" value="Edit">
                </div>
                <?php
                    }
                ?>
		      </form>

              	  	
	  	</div>
	  </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myjs.js"></script>
  </body>
</html>