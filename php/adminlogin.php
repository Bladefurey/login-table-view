<?php
  include_once('dbadmin.php');
  if(isset($_POST['login'])){
    $sql="select * from login";
    $result=mysqli_query($connection,$sql);
    $row=mysqli_num_rows($result);
    if($row>0){
      while($row=mysqli_fetch_assoc($result)){
        session_start();
        if(isset($_POST['username']) && isset($_POST['password'])){
          if($_POST['username']==$row['username'] && $_POST['password']==$row['password']){
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['password'];
            header("location:display.php");
          }
          else{
            $_SESSION['error']="invalid";
          }
        }
      }
    }
    else{
      echo "There is no Data.";
    }
  }
?>
<html>
<head>
<title>admin</title>
</head>
<body>
    <form method="POST">
        <input type="text" id="name" name="username" placeholder="Enter Username" autofocus >
        <br>
        <span id="nameerror" style="color:red"></span>
        <br>
        <input type="password" id="pwd" name="password" placeholder="Enter Password">
        <br><span id="pwerror" style="color:red"></span>
        <br>
        <button type="submit" name="login" id="login">Login</button>
            <?php
            if(isset($_SESSION['error']))
            {
              if($_SESSION['error']=="invalid")
              echo "<span style='color:red'>Invalid username and password</span>";
            }
            ?>
    </form>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/myjs.js"></script>
</body>
</html>