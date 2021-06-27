<?php 
include('includes/header.php');
include_once('../db/connection.php');

if( !isset($_SESSION['email'])){
    header("Location: ../index.php");
}else{
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM jobs WHERE id = '$id'";
        $sql_query =  mysqli_query($conn, $sql);
        if($sql_query){
           header("Location: dashboard.php");
        }

    }
}

?>
