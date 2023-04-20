<?php

if(mysqli_num_rows($record)>0){
  while($record_data=mysqli_fetch_assoc($record)){
    $img=$record_data['img1'];
    $location=$record_data['location'];
    $price=$record_data['price'];

    echo'
    <div class="col-5 remove">
      <div class="card" onclick="redirectDetails(\''.$img.'\', \''.$location.'\', \''.$price.'\')">
        <img src="'.$img.'" alt="" style="width:250px">
        <div class="container">
          <h4 class="location"><b>'.$location.'</b></h4>
          <h5>&#x20B9; '.$price.'</h5>
        </div>
      </div>
    </div>';
  }
}

?>

<script>
function redirectDetails(id) {
  var form = document.createElement("form");
  form.setAttribute("method", "post");
  form.setAttribute("action", "pdetails.php");

  var input1 = document.createElement("input");
  input1.setAttribute("type", "hidden");
  input1.setAttribute("name", "id");
  input1.setAttribute("value", id);
  form.appendChild(input1);

 
  document.body.appendChild(form);
  form.submit();
}
</script>
