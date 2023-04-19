
<?php include './db.php';?>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
  <?php include './header.php'; ?>
  <script type="text/javascript">
    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>

  <!--login-->
  <div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="Images/logo2.png">
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <!--------featured project ------->
  <div class="categories2">
    <div class="container2">
      <h2>Commercial Property</h2>
      <div class="row2">
        <?php
        $record=mysqli_query($conn,'SELECT * FROM `property` WHERE property_type="commercial"');
        if(mysqli_num_rows($record)>0){
          while($record_data=mysqli_fetch_assoc($record)){
            $img=$record_data['img1'];
            $location=$record_data['location'];
            $price=$record_data['price'];

        echo'
        <div class="col-5 remove">
          <div class="card">
            <a href=""><img src="'.$img.'" alt="" style="width:250px"></a>
            <div class="container">
              <h4 class="location"><b>'.$location.'</b></h4>
              <h5>&#x20B9; '.$price.' Lakh</h5>
            </div>
          </div>
        </div>';
               } }?>
      </div>
    </div>

    <!---------Footer---------->

    <?php include './footer.php'; ?>

</body>
<script src="../script.js"></script>

</html>