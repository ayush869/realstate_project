<?php
// include the database connection file
include './db.php';

// redirect to frontpage if the user is already logged in
if(isset($_SESSION['username'])){
    header('Location: ./frontpage.php');
    exit;
}

// check if the registration form has been submitted
if(isset($_POST['registration'])){
    // retrieve the user inputs from the form
    $username = $_POST['username'];
    $number = $_POST['number'];
    $email = $_POST['email_id'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // check if the passwords match
    if($password != $repassword){
        echo "<script>alert('Passwords do not match. Please try again.')</script>";
        exit;
    }

    // check if the username already exists in the database
    $sql_query = "SELECT * FROM `signup_system` WHERE username='$username'";
    $result = mysqli_query($conn,$sql_query);
    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Username already exists. Please choose a different one.')</script>";
        header('Location:./login.php');
        exit;
    }

    // insert the user information into the database
    $sql = "INSERT INTO `signup_system` (`username`, `password`, `email_id`, `number`) VALUES ('$username', '$password', '$email', '$number')";
    if($conn->query($sql) === TRUE){
        echo '<script> alert("Sign up successful."); </script>';
    } else {
        echo '<script> alert("Error: ' . $sql . '<br>' . $conn->error . '"); </script>';
    }

    // redirect the user to the login page
    header("Location: ./login.php");
    exit;
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
       #Psearch{
          display: none;
          }
    </style>


<body>
    <div class="categories2">
        <div class="container">
            <table>
                <tr>
                    <td>
    <form action="./registration.php" method="post">

                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="psw"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email Id" name="email_id" required>

                        <label for="psw"><b>Phone Number</b></label>
                        <input type="text" placeholder="Enter Number" name="number" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <label for="psw"><b>Re-Password</b></label>
                        <input type="password" placeholder="Enter Password" name="repassword" required>

                        <button type="submit" class="btn" name="registration">Sign Up</button>


                    </td>
                    <td>
                        <img src="../Images/Building1.png" style="width:100%">
                    </td>
                </tr>
    </form>

            </table>
        </div>
    </div>

    <?php include './footer.php'; ?>

</body>

</html>