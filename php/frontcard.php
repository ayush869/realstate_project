<?php    
    if(mysqli_num_rows($record)>0){
        $num=0;
            while($record_data=mysqli_fetch_assoc($record)){
                $img=$record_data['img1'];
                $location=$record_data['location'];
                $building_name=$record_data['building_name'];
                if($num<=4){
                    echo'<div class="col-4">
                    <div class="card">
                    <img src="'.$img.'" alt="" style="width:250px">
                    <div class="container">
                    <h4><b>'.$building_name.'</b></h4>
                    <p><i class="fas fa-map-marker-alt" style="color: blue"></i>  '.$location.'</p>
                     </div>
                   </div>
               </div>';
            $num=$num+1;
        }
    }
}
