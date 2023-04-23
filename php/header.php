<header>
  <img src="../Images/logo2.png" class="logo">
    <ul>
      <li><input type="text" placeholder="SearchProperty" id="Psearch" onkeyup="searchProperty()"></li>
      <li><a href="./frontpage.php">HOME</a></li>
      <li><div class="dropdown">
      <a><span>PROPERTY TYPE</span></a>
        <div class="dropdown-content">
          <a href="./ResidentalProperty.php">Residental</a>
          <a href="./CommercialProperty.php">Commercial</a>
          <a href="./PlotsProperty.php">Plots/Land</a>
        </div>
      </div></li>
      <li><a href="./postproperty.php">Post Property</a></li>
      <li><a href="./AboutUs.php">ABOUT</a></li>   
      <li><button onclick="document.getElementById('id01').style.display='block'"class="navbtn">Login</button></li>  
    </ul>
            
  </header>

  
    <!--login-->
    <div id="id01" class="modal">
      <form class="modal-content animate" action="" method="">
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
  </div>
</div>
</div>
    <script type="text/javascript">
        window.addEventListener("scroll",function(){
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 0);
        }
      )
        // Get the modal
        var modal = document.getElementById('id01');
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>       <!--login script-->
