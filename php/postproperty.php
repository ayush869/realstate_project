<?php include './db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $img1 = $_POST['img1'];
  $img2 = $_POST['img2'];
  $img3 = $_POST['img3'];
  $location = $_POST['location'];
  $price = $_POST['price'];
  $rating = $_POST['rating'];
  $bhk = $_POST['bhk'];
  $parking = $_POST['parking'];
  $property_type = $_POST['property_type'];
  $carpet_area = $_POST['carpet_area'];
  $floor = $_POST['floor'];
  $facing = $_POST['facing'];
  $gate_security = $_POST['gate_security'];
  $furnishing_status = $_POST['furnishing_status'];
  $building_name = $_POST['building_name'];
  $owner_description = $_POST['owner_description'];
  $owner_name = $_POST['owner_name'];
  $owner_contact_details = $_POST['owner_contact_details'];
  $owner_mailid = $_POST['owner_mailid'];
  
  // Prepare the SQL query
  $sql = "INSERT INTO property (img1, img2, img3, location, price, rating, bhk, parking, property_type, carpet_area, floor, facing, gate_security, furnishing_status, building_name, owner_description, owner_name, owner_contact_details, owner_mailid) 
  VALUES ('$img1', '$img2', '$img3', '$location', '$price', '$rating', '$bhk', '$parking', '$property_type', '$carpet_area', '$floor', '$facing', '$gate_security', '$furnishing_status', '$building_name', '$owner_description', '$owner_name', '$owner_contact_details', '$owner_mailid')";
  
  // Execute the query and check if it was successful
  if (mysqli_query($conn, $sql)) {
      // echo "<script>alert('Record created successfully')</script>";
      header('Location:./postproperty.php');
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      header('Location:./postproperty.php');
    }
}

// Close the database connection
mysqli_close($conn);
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




  <h2>Add Property</h2>
	<form action="postproperty.php" method="post">
		<label for="img1">Image 1:</label>
		<input type="text" id="img1" name="img1"><br><br>

		<label for="img2">Image 2:</label>
		<input type="text" id="img2" name="img2"><br><br>

		<label for="img3">Image 3:</label>
		<input type="text" id="img3" name="img3"><br><br>

		<label for="location">Location:</label>
		<input type="text" id="location" name="location"><br><br>

		<label for="price">Price:</label>
		<input type="text" id="price" name="price"><br><br>

		<label for="rating">Rating:</label>
		<input type="text" id="rating" name="rating"><br><br>

		<label for="bhk">BHK:</label>
		<input type="text" id="bhk" name="bhk"><br><br>

		<label for="parking">Parking:</label>
		<input type="text" id="parking" name="parking"><br><br>

		<label for="property_type">Property Type:</label>
		<input type="text" id="property_type" name="property_type"><br><br>

		<label for="carpet_area">Carpet Area:</label>
		<input type="text" id="carpet_area" name="carpet_area"><br><br>

		<label for="floor">Floor:</label>
		<input type="text" id="floor" name="floor"><br><br>

		<label for="facing">Facing:</label>
		<input type="text" id="facing" name="facing"><br><br>

		<label for="gate_security">Gate Security:</label>
		<input type="text" id="gate_security" name="gate_security"><br><br>

		<label for="furnishing_status">Furnishing Status:</label>
		<input type="text" id="furnishing_status" name="furnishing_status"><br><br>

		<label for="building_name">Building Name:</label>
		<input type="text" id="building_name" name="building_name"><br><br>

		<label for="owner_description">Owner Description:</label>
		<textarea id="owner_description" name="owner_description"></textarea><br><br>

		<label for="owner_name">Owner Name:</label>
		<input type="text" id="owner_name" name="owner_name"><br><br>

		<label for="owner_contact_details">Owner Contact Details:</label>
		<input type="text" id="owner_contact_details" name="owner_contact_details"><br><br>

		<label for="owner_mailid">Owner Mail ID:</label>
		<input type="text" id="owner_mailid" name="owner_mailid"><br><br>

		<input type="submit" value="Submit">
	</form>
    <?php include './footer.php'; ?>
</body>

</html>