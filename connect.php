<?php


$conn = mysqli_connect('localhost','root','','tryo');

if($conn == false){
    die('connection failed : '.mysqli_connect_error());
}

    $pname = $_REQUEST['pname'];
    $pid = $_REQUEST['pid'];
    $cid = $_POST['cid'];
    $ename = $_REQUEST['ename'];
    $start = $_REQUEST['start'];
    $deadline = $_REQUEST['deadline'];
    $projfile = $_REQUEST['projfile'];
    $Status = $_REQUEST['Status'];

    $sql = "insert into project values ('$pname', '$pid','$cid','$ename','$start','$deadline','$projfile','$Status') ";
    
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