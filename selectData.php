<?php 


$conn = mysqli_connect("localhost","root","","test");

$sql = "SELECT * FROM `employees` LIMIT 20";
     $result= mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)){
        $data ="";
        while($row= mysqli_fetch_assoc($result)){
                $data .="<div class='col-md-4 mb-3'>";
                $data .="<div class='border p-3'>";
                $data .= "<h3 class='alert alert-success p-3'>First Name : ".$row['firstName']."</h3>";
                $data .= "<h3 class='alert alert-success p-3'>Last Name : ".$row['lastName']."</h3>";
                $data .= "<h3 class='alert alert-success p-3'>Job Title : ".$row['jobTitle']."</h3>";
                $data .="</div>";
                $data .="</div>";
        }
        echo $data;
    }