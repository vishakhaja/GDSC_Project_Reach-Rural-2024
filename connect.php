<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['volunteer'])) {
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $age = $_POST['age'];
   $mothertoungue = $_POST['mothertoungue'];
   $contactno = $_POST['contactno'];
   $city = $_POST['city'];
   $hours = $_POST['hours'];
   $meetday = $_POST['meetday'];
   $meettime = $_POST['meettime'];

   //connect database
   $conn = new mysqli('localhost','root','','rural reach');
   if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into volunteer(firstname, lastname, 
    email, password, age, mothertoungue, contactno, city, hours, meetday, meettime");
   }
  $stmt->bind_param("sssisisisi",$firstname, $lastname, $gender, $email, $password, 
  $age, $mothertoungue, $contactno, $city, $hours, $meetday, $meettime) ;
  $stmt->execute();
  echo "registration successful..";
  $stmt->close();
  $conn->close();
} 
elseif (isset($_POST['school'])) {
    $schoolname = $_POST['schoolname'];
    $schoolid = $_POST['schoolid'];
    $ttstudents = $_POST['ttstudents'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = $_POST['ttteacher'];
    $mothertoungue = $_POST['mothertoungue'];
    $contactno = $_POST['contactno'];
    $city = $_POST['city'];
    $hours = $_POST['hours'];
    $lday = $lday['lday']
    $meetday = $_POST['meetday'];
    $meettime = $_POST['meettime'];
 
    //connect database
    $conn = new mysqli('localhost','root','','rural reach');
    if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
    }else{
     $stmt = $conn->prepare("insert into school(schoolname, schoolid, 
     ttstudents, email, password, tteacher, mothertoungue, contactno, city, hours, lday, meetday, meettime");
    }
   $stmt->bind_param("siissisisissi",$schoolname, $schoolid, $ttstudents, $email, 
   $password, $tteacher, $mothertoungue, $contactno, $city, $hours, $lday, $meetday, $meettime) ;
   $stmt->execute();
   echo "registration successful..";
   $stmt->close();
   $conn->close();
}
}
?>