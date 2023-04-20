<?php include './db.php';?>

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
</head>
    <body>
        <header>
            <img src="../Images/logo2.png" class="logo">
                <ul>
                    <li><a href="frontpage.html">HOME</a></li>
                    <li><div class="dropdown">
                        <a><span>PROPERTY TYPE</span></a>
                        <div class="dropdown-content">
                            <a href="ResidentalProperty.html">Residental</a>
                            <a href="CommercialProperty.html">Commercial</a>
                            <a href="PlotsProperty.html">Plots/Land</a>
                        </div>
                      </div></li>
                    <li><a href="#">RENT PROPERTY</a></li>
                    <li><a href="#">ABOUT</a></li>   
                    <li><button onclick="document.getElementById('id01').style.display='block'"class="navbtn">Login</button></li>  
                </ul>
            </header>
 
    
        <!--login-->
        <div id="id01" class="modal">
  
            <form class="modal-content animate" action="/action_page.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="../Images/logo2.png">
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

<!--main cource-->
<div class="categories2">
    <div class="container2">
            <div class="row">
                <div class="column">
                    <img src="../Images/oberoi/ob1.png" height="200px width=100px">
                
                </div>
              <div class="column">
                <h2>For Sale</h2>              
                <table class="row-9">
                  <tr>
                        <td class="column-9"><h4><i class="fa fa-bed"></i>Location<h4> </td>
                        <td class="column-9"><h4><i class="fa fa-bed"></i>Rating</h4></td>
                  </tr>
                  <tr>
                        <td class="column-9"><h4><i class="fa fa-bed"></i>BHK</h4></td>
                        <td class="column-9"><h4><i class="fa fa-car"></i>Parking</h4></td>
                  </tr>
                  <tr>
                        <td class="column-9"><h4><i class="fa fa-bed"></i>Property Type</h4></td>
                        <td class="column-9"><h4><i class="fa fa-bed"></i>Carpet Area</h4></td>
                  </tr>
                  <tr>
                        <td class="column-9"><h4><i class="fa fa-bed"></i>Furnishing Status</h4></td>
                  </tr>
                </table>
                
                   
                </div>
                
            </div>
            </div>          
         
            </div>
            </div>

<!---------Footer---------->

    <?php include './footer.php'?>
    </body> 
</html>