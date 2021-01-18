<?php 
 include('includes/connection.php');
$id = $_GET['id'];
$query = "delete from cases where case_id  = $id";

mysqli_query($conn,$query);

// redirect to manage admin 
header("location:manage_cases.php");