<?php


$conn = mysqli_connect('localhost','root','','tryo');

if($conn == false){
    die('connection failed : '.mysqli_connect_error());
}
    $uname = $_REQUEST['uname'];
    $psw = $_REQUEST['psw'];
   
    

    $sql = "insert into login values ('$uname','$psw') ";
    
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