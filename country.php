<?php
 $conn=mysqli_connect('localhost','root','','laraveldev');

    $sql="select * from categories";
    $q=mysqli_query($conn,$sql);
    $data=[];
     if(mysqli_num_rows($q)>0){
             while($row=mysqli_fetch_assoc($q)){
                $data[]=$row;
             }
     }

    echo json_encode($data);
    http_response_code(500)
    

?>