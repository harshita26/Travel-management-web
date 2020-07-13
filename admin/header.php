<?php
include('../db.php');
session_start();
if ($_SESSION['uid']){
    echo '';
}
else{
    header('location:../admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar bg-white">
<a href="index.php" class="navbar-brand"><img src="../images/logo.jpg" alt="" width='120px'></a>  
        <ul class="nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Preview Website</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"> logout</a>
            </li>
        </ul>
    </nav>
    <hr>
    <section>
        <div class="container shadow">
            <div class="row p-5">
                <div class="col-sm-3 border-right">
                    <h4>Admin Links</h4>
                    <a href="adduser.php">Add User</a>
                    <a href="updateuser.php">Update User</a>
                    <a href="deleteuser.php">Delete User</a>
                    <a href="addcat.php">Add Category</a>
                    <a href="updatecat.php">Update Category</a>
                    <a href="deletecat.php">Delete Category</a>
                    <a href="viewcat.php">View Category</a>
                    <a href="addsubcat.php">Add Sub-Category</a>
                    <a href="updatesubcat.php">Update Sub-Category</a>
                    <a href="deletesubcat.php">Delete Sub-Category</a>
                    <a href="viewsubcat.php">View Sub-Category</a>
                    <a href="addpack.php">Add Package</a>
                    <a href="updatepack.php">Update Package</a>
                    <a href="deletepack.php">Delete Package</a>
                    <a href="viewpack.php">View Package</a>
                    <a href="enquiry.php">View Enquiry</a>
                </div>