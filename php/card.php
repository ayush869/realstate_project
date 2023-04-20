<?php

if(mysqli_num_rows($record)>0){
          while($record_data=mysqli_fetch_assoc($record)){
            $img=$record_data['img1'];
            $location=$record_data['location'];
            $price=$record_data['price'];
            $id=$record_data['id'];

        echo'
        <div class="col-5 remove" onclick="redirectDetails(\''.$id.'\')">
          <div class="card" >
            <a href=""><img src="'.$img.'" alt="" style="width:250px"></a>
            <div class="container">
              <h4 class="location"><b>'.$location.'</b></h4>
              <h5>&#x20B9; '.$price.'</h5>
            </div>
          </div>
        </div>';
    } }
    ?>
