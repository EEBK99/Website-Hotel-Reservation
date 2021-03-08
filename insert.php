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

     $sql = "INSERT INTO contactdb(u_name, u_phone, u_email, u_message) VALUES ('$_POST[n1]','$_POST[p1]','$_POST[e1]','$_POST[wm1]')";

     $result = mysqli_query($conn,$sql);

     if ($result === false) {
      echo "Data already exist!";
     }
     else{
      echo "Message sent successfully!";
     }

     header("refresh:2; url=contactus-HAA.php");
?>