<?php include './db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
          <title>SkyWay</title>
    <link rel="stylesheet" href="../Style0.css?v=<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="../https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
  #Psearch{
    display: none;
  }
</style>
</head>
    <body>
<?php include './header.php';?>
 
    
        <!--login-->
        <div id="id01" class="modal">
  
            <form class="modal-content animate" action="/action_page.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="../Images/logo2.png">
              </div>
          
              <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" requi#4863A0>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" requi#4863A0>
                  
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

<!--main cource-->
<?php

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $record=mysqli_query($conn,"SELECT * FROM `property` WHERE id='$id'") or die("failed query");
  if(mysqli_num_rows($record)>0){
    while($record_data=mysqli_fetch_assoc($record)){
  
  $img1=$record_data['img1'];
  $img2=$record_data['img2'];
  $img3=$record_data['img3'];
  $location=$record_data['location'];
  $bhk=$record_data['bhk'];
  $property_type=$record_data['property_type'];
  $furnishing=$record_data['furnishing_status'];
  $rating=$record_data['rating'];
  $parking=$record_data['parking'];
  $carpet_area=$record_data['carpet_area'];
  $security=$record_data['gate_security'];
  $building_name=$record_data['building_name'];
  $price=$record_data['price'];
  $description=$record_data['owner_description'];
echo '<div class="categories2">
    <div class="container2">
            <div class="row">
                <div class="column">
                    <img src="'.$img1.'" height="200px width=100px">
                </div>

              <div class="column">
                <h2>Overview</h2>              
                <table class="row-9">
                  <tr>
                        <td class="column-9"><h4><i class="fa fa-map-marker-alt"  style="color: #4863A0"></i>Location : '.$location.' <h4> </td>
                        <td class="column-9"><h4><i class="fa fa-star"  style="color: #4863A0"></i>Rating : '.$rating.'</h4></td>
                  </tr>
                  <tr>
                        <td class="column-9"><h4><i class="fa fa-home"  style="color: #4863A0"></i>BHK : '.$bhk.'</h4></td>
                        <td class="column-9"><h4><i class="fa fa-car"  style="color: #4863A0"></i>'.$parking.'</h4></td>
                  </tr>
                  <tr>
                        <td class="column-9"><h4><i class="fa fa-home"  style="color: #4863A0"></i>Property Type : '.$property_type.'</h4></td>
                        <td class="column-9"><h4><i class="fa fa-building"  style="color: #4863A0"></i>Carpet Area : '.$carpet_area.'</h4></td>
                  </tr>
                  <tr> 
                        <td class="column-9"><h4><i class="fa fa-couch"  style="color: #4863A0"></i>Furnishing Status : '.$furnishing.'</h4></td>
                        <td class="column-9"><h4><i class="fa fa-user-shield"  style="color: #4863A0"></i>Security : '.$security.'</h4></td>
                  </tr>
          </table> 
                      
      </div>              
    </div>

              <hr>
                <h2>'.$building_name.'</h2>
                <h3>&#8377; Price : '.$price.'</h3>
                <hr>
                <h3>Desciption</h3>
                <p>'.$description.'</p>
                <a href="" class="btn">Enquiry Now &#10097;</a>

             
  </div>                  
</div>';
  } } }?>
<!---------Footer---------->

    <?php include './footer.php'?>
    </body> 
</html>