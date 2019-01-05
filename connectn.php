<?php
$Fname = $_POST['fnanme'];
$Mname = $_POST['mname'];
$Lname = $_POST['lname'];
$Email = $_POST['email'];
$Contact = $_POST['contact'];
$Danceform = $_POST['dance'];
$Interestd = $_POST['students'];

if (!empty($Fname) || !empty($Mname) || !empty($Lname) || !empty($Email) ||
!empty($Contact) || !empty($Danceform)||!empty($Interestd)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "nachadedance";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (fnanme,mname,lname,email,contact,dance,students) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssisi", $Fname, $Mname, $Lname, $Email, $Contact, $Danceform,$Interestd);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>