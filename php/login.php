<?php
include './db.php';



// check if the registration form has been submitted
if(isset($_POST['Login'])){
  // retrieve the user inputs from the form
  $username = $_POST['username'];
  $password = $_POST['password'];
$_SESSION['username']=$username;


  // check if the username already exists in the database
  $sql_query = "SELECT * FROM `signup_system` WHERE username='$username'";
  $result = mysqli_query($conn,$sql_query);
  if(mysqli_num_rows($result) >0){
    $row=mysqli_fetch_assoc($result);
      if((password_verify($password,$row['password']))){
        echo'<script> alert("Incorrect Username /Password");</script>';

      }else{
        echo'<script> alert("Login Successfully");</script>';
        header("Location:./frontpage.php");

      }
    }else{
      echo'<script> alert("Not Registered");</script>';
      header("Location:./registration.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SkyWay</title>
  <link rel="stylesheet" href="../Style0.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
  #Psearch {
    display: none;
  }
</style>

<body>

<form action="" method="post">
  <div class="categories2">
    <div class="container">
      <h2>Login <h2><br>
      <table>
        <tr>
          <td>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
          </td>
        </tr>
        <tr>
        <button type="submit" class="btn" name="Login">Login</button>

          </td>

        </tr>
      </table>
    </div>
  </div></form>
  <?php include './footer.php'; ?>
</body>

</html>