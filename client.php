<?php


$conn = mysqli_connect('localhost','root','','tryo');

if($conn == false){
    die('connection failed : '.mysqli_connect_error());
}

    $cid = $_REQUEST['cid'];
    $cname = $_REQUEST['cname'];
    $lname = $_POST['lname'];
    $pdesc = $_REQUEST['pdesc'];
    $cdeadline = $_REQUEST['cdeadline'];
    $mobileno = $_REQUEST['mobileno'];
    $number = $_REQUEST['number'];

    $sql = "insert into client values ('$cid', '$cname','$lname','$pdesc','$cdeadline','$mobileno','$number') ";
    
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