<?php    
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "ohrsdb";


     $conn = new mysqli($servername,$username,$password,$dbname);

     if ($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
     }
     else{
      echo "Connected Succesfully!";
     }

     $sql = "INSERT INTO reservationdb(r_arrival, r_departure r_rooms, r_guests,  r_name,  r_phone, r_email, r_message) VALUES ('$_POST[a1]','$_POST[d1]','$_POST[op1]','$_POST[op2]','$_POST[n2]','$_POST[p2]','$_POST[e2]','$_POST[wm2]')";

     $result = mysqli_query($conn,$sql);

     if ($result === false) {
      echo "Data already exist!";
     }
     else{
      echo "Reserved successfully!";
     }
?>