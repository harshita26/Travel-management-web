<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar bg-white">
        <a href="index.php" class="navbar-brand"><img src="images/logo.jpg" alt="" width='120px'></a>  
        <ul class="nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="category.php">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin login</a>
            </li>
        </ul>
    </nav>
    <hr>
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h4 class="text-primary">Category</h4>
                        <?php include('db.php');
                        $qry="SELECT * FROM `category`;";
                        $run=mysqli_query($conn,$qry);
                        while($data=mysqli_fetch_array($run)){
                            echo "<a href='subcat.php?cid=$data[0]'>$data[1]</a>";
                        }?>
                    </div>
                    <div class="col-sm-9 text-center">
                        <h4 class="text-primary">Sub-categories</h4>
                        <?php $cids=$_GET['cid'];
                        $qury="SELECT * FROM `sub-cat` WHERE `cid`='$cids';";
                        $runs=mysqli_query($conn,$qury);
                        while($d=mysqli_fetch_array($runs)){
                            ?><div class="card float-left w-50">
                            <div class="card-header"><?php echo $d[2];?></div>
                            <div class="card-body"><img src="images/datapic/<?php echo $d[4];?>" class='img-fluid'alt=""></div>
                            <div class="card-footer" ><a href="pack.php?sid=<?php echo $d[0];?>">View Details</a></div>
                            </div>
                            <?php
                        }?>
                    </div>
                </div>
            </div>
        </section>
   
   
   

<footer class="bg-primary text-center">
    <div class="social-icons pt-5">
        <a href="#"><span class="facebook"> </span></a>
        <a href="#"><span class="twitter"></span></a>
        <a href="#"><span class="googleplus"></span></a>
        <a href="#"><span class="pinterest"></span></a>
        <a href="#"><span class="instagram"></span></a>
    </div>
    <div class="text-right">
        <p class="mb-0">@harshita2020</p>
</div>
</footer>
             

</body>
</html>