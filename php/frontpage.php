<?php
include './db.php';

if(!isset($_SESSION['username'])){
  header('Location:./registration.php');
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

<style>
  #Psearch {
    display: none;
  }
</style>

<body style="margin-top: 108px;">
  <?php include './header.php'; ?>


  <!--main content(1)-->
  <div class="categories">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <h1>Owning a home is a keystone of wealth…<br> both financial affluence and <br> emotional security!</h1>
          <p>The house you looked at today and wanted to think about until tomorrow may be the same <br>house someone looked at yesterday and will buy today...............</p>
        </div>

        <div class="col-2">
          <img src="../Images/Building1.png">
        </div>
      </div>
    </div>
    <hr>
  </div>


  <!------Main content (2)------>

  <div class="categories">
    <div class="container">
      <h2>Oberoi Projects</h2>
      <p>We have delivered some of the world's finest developments.</p>
      <div class="row">
        <div class="col-3">
          <img src="../Images/oberoi/oberoi1.png">
        </div>
        <div class="col-3">
          <img src="../Images/oberoi/oberoi2.png">
        </div>
        <div class="col-3">
          <img src="../Images/oberoi/oberoi3.png">
        </div>
        <p>Located on the western suburbs of the city, Goregaon East is a prime residential locality that hubs residential colonies like Gokuldham and Aarey Colony. The neighborhood locality of Goregaon east includes Malad East, Jogeshwari East, and Sanjay Gandhi National park. In the Key real estate developers in this region are Oberoi Realty </p>
      </div>
    </div>
    <hr>
  </div>

  <!--------Main property------->

  <div class="categories">
    <div class="container">
      <h2>On Going Projects</h2>
      <div class="row">
        <div class="col-4">
          <div class="card">
            <img src="../Images/oberoi/oberoimain.png" alt="" style="width:250px">
            <div class="container">
              <h4><b>Oberoi projects</b></h4>
              <p>Goregaon</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="../Images/Featuredproject/Hiranandani.JPG" alt="" style="width:250px">
            <div class="container">
              <h4><b>Hiranandani Projects</b></h4>
              <p>Powai</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="../Images/Featuredproject/lodha.jpg" alt="" style="width:250px">
            <div class="container">
              <h4><b>Lodha projects</b></h4>
              <p>Mahalakshmi</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="../Images/Featuredproject/hotels.png" alt="" style="width:250px">
            <div class="container">
              <h4><b>Taj projects</b></h4>
              <p>Dubai</p>
            </div>
          </div>
        </div>
      </div>

      <h2>Commercial</h2>
      <div class="row">
        <?php
        $record = mysqli_query($conn, 'SELECT * FROM `property` WHERE property_type="commercial"');
        include './card.php' ?>
      </div>

      <h2>Residential</h2>
      <div class="row">
        <?php
        $record = mysqli_query($conn, 'SELECT * FROM `property` WHERE property_type="residental"');
        include './card.php' ?>
      </div>

      <h2>Plots</h2>
      <div class="row">
        <?php
        $record = mysqli_query($conn, 'SELECT * FROM `property` WHERE property_type="plots"');
        include './card.php' ?>
      </div>
      <?php ?>
    </div>
  </div>

  <!---------Footer---------->

  <?php include './footer.php'; ?>
</body>

</html>