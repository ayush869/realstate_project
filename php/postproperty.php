<?php include './db.php';
if(isset($_POST['submit'])){

  // Retrieve form data
  $building_name = $_POST['building_name'];
  $location = $_POST['location'];
  $property_type = $_POST['property_type']; // fixed variable name
  $img1 = $_POST['img1'];
  $img2 = $_POST['img2'];
  $img3 = $_POST['img3'];
  $bkh = $_POST['bhk'];
  $parking = $_POST['parking'];
  $carpet_area = $_POST['carpet_area'];
  $facing = $_POST['facing'];
  $gate_security = $_POST['gate_security'];
  $furnishing_status = $_POST['furnishing_status'];
  $owner_name = $_POST['owner_name'];
  $owner_mailid = $_POST['owner_mailid'];
  $owner_contact_detail = $_POST['owner_contact_detail'];
  $owner_description = $_POST['owner_description'];

  // Insert data into database
  $query = "INSERT INTO `property` (`building_name`, `location`, `property_type`, `img1`, `img2`, `img3`, `bhk`, `parking`, `carpet_area`, `facing`, `gate_security`, `furnishing_status`, `owner_name`, `owner_mailid`, `owner_contact_detail`,`owner_description`) 
  VALUES ('$building_name', '$location', '$property_type', '$img1', '$img2', '$img3', '$bkh', '$parking', '$carpet_area', '$facing', '$gate_security', '$furnishing_status', '$owner_name', '$owner_mailid', '$owner_contact_detail', '$owner_description')";

  // Execute the query
  if(mysqli_query($conn, $query)){
    header('Location:./postproperty.php');
  } else {
    echo "<script>alert('Error inserting data: ".mysqli_error($conn)."');</script>"; // changed position of error message
    header('Location:./postproperty.php');
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
  <link href="../https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    #Psearch {
      display: none;
    }
  </style>
</head>

<body>
  <?php include './header.php'; ?>




  <!-- main content -->
  <div class="categories2">
    <div class="container2">
      <form style="width:50%" action="./postproperty.php" method="post">
        Enter Building Name :- <input type="text" name="building_name">
        Enter Location :- <input type="text" name="location">
      <input type="text" name="property_type">
        <br>
        <br>
        Enter Propert Image (1) :- <input type="text" placeholder="Enter File Location // Copy IMAGES file Path And Paste Here" name="img1">
        Enter Propert Image (2) :- <input type="text" placeholder="enter File Location // Copy IMAGES file Path And Paste Here" name="img2">
        Enter Propert Image (3) :- <input type="text" placeholder="enter File Location // Copy IMAGES file Path And Paste Here" name="img3">
        Enter BKH :- <input type="text" name="bhk">
        Parking :- <input type="text" name="parking">
        Carpet Area :- <input type="text" name="carpet_area">
        Facing :- <input type="text" name="facing">
        Gate Security :- <input type="text" name="gate_security">
        Furnishing :- <input type="text" name="furnishing_status">
        Enter your name :- <input type="text" name="owner_name">
        <br>
        <br>
        Enter your Email :- <input type="email" name="owner_mailid">
        <br><br>
        <label>Enter Phone No :- <input type="text" name="owner_contact_detail"></label>
        Description about Property :- <input type="text" name="owner_description">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
    <?php include './footer.php'; ?>
</body>

</html>