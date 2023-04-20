<?php include './db.php'; ?>

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
  <script>
      
function redirectDetails(id) {
    let form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "pdetail.php");
  
    let input1 = document.createElement("input");
    input1.setAttribute("type", "hidden");
    input1.setAttribute("name", "id");
    input1.setAttribute("value", id);
    form.appendChild(input1);
  
   
    document.body.appendChild(form);
    form.submit();}
  </script>
</head>

<body>
  <?php include './header.php';


  echo '<!--login-->';
  include './login.php';

  ?>
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
      <h2>Residental Property</h2>

      <div class="row2">
        <?php
        $record = mysqli_query($conn, 'SELECT * FROM `property` WHERE property_type="residental"');
        include './card.php';
        ?>
      </div>

    </div>
  </div>

  <!---------Footer---------->

  <?php include './footer.php'; ?>

</body>
<script src="../script.js"></script>

</html>