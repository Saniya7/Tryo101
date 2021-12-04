<?php


$conn = mysqli_connect('localhost','root','','tryo');

if($conn == false){
    die('connection failed : '.mysqli_connect_error());
}
    $fname = $_REQUEST['fname'];
    $lname = $_POST['lname'];
    $mobileno = $_REQUEST['mobileno'];
    $dob = $_REQUEST['dob'];
    $country = $_REQUEST['country'];
    $email = $_REQUEST['email'];
    $psw = $_REQUEST['psw'];
    $pswrepeat = $_REQUEST['pswrepeat'];
    

    $sql = "insert into register values ('$fname', '$lname','$mobileno','$dob','$country','$email','$psw','$pswrepeat') ";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>"; 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }



   mysqli_close( $conn);


?>