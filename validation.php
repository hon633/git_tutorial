<?php 

$Fname=$Lname=$emailAd="";
$FnameErr=$LnameErr=$emailErr="";
$customerID="";
$phoneNo="";

if($_SERVER['REQUEST_METHOD'] == "POST"){

  if(isset($_POST['submit'])){
        $Fname=$_POST["Fname"];
        $Lname=$_POST["Lname"];
        $email=$_POST["emailAd"];
        $phoneNo=$_POST["phoneNo"];
         

        
        $host='localhost';
        $user='hon';
        $pass='1234';
        $dbname='customer';

        $conn=mysqli_connect($host,$user,$pass,$dbname);

        $sql="INSERT INTO customer(customerID, Fname, Lname, emailAd, phoneNo) value('$customerID', '$Fname', '$Lname', '$emailAd', '$phoneNo')";
        mysqli_query($conn, $sql);
        
      if(empty($_POST['name'])){
            $FnameErr = "Please enter name!";
        }

      else{
      $name = test_input($_POST['name']);
      if (!preg_match("/^[a-z A-Z]*$/", $name)) {
        $nameErr="only letter and white spaces are allowed.";
        echo $nameErr;
      }
      else{
        echo $name;
      }
    }
      


    if (empty($_POST['email'])) {
       $emailErr = "please enter your email!";
        }
    else{
      $email = test_input($_POST['email']);
    }
    
  }
}

function test_input($data){
  $data=trim($data);
  $data=htmlspecialchars($data);
  $data=stripcslashes($data);
}



 ?>