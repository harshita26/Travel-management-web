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
                        <h4 class="text-primary">View Package</h4>
                        <?php $pids=$_GET['pid'];
                        $qury="SELECT * FROM `package` WHERE `id`='$pids';";
                        $runs=mysqli_query($conn,$qury);
                        while($d=mysqli_fetch_array($runs)){
                            ?><div class=" float-left w-50">
                            <div class=""><span class='font-weight-bold'>Package Name: </span><?php echo $d[1];?></div>
                            <div class=""><img src="images/package/<?php echo $d[5];?>" width='200px'class='float-left'alt=""><img src="images/package/<?php echo $d[6];?>" width='200px' class=''alt=""></div>
                            <div class="text-left">
                                <span class='font-weight-bold'>Category: </span><?php $pid= $d[2];
                                $qy="SELECT * FROM `category` WHERE `id`='$pid';";
                                $rn=mysqli_query($conn,$qy);
                                while($ds=mysqli_fetch_assoc($rn)){
                                    echo $ds['name'];
                                } ?><br>
                                <span class='font-weight-bold'>Sub-Category: </span><?php $si=$d[3]; $q="SELECT `sub-name` FROM `sub-cat` WHERE `id`='$si';";
                                $r=mysqli_query($conn,$q);
                                while($datas=mysqli_fetch_assoc($r)){
                                    echo $datas['sub-name'];
                                } ?>
                                <br>
                                <span class='font-weight-bold'>Sub-Category: </span><?php echo $d[4]; ?>
                            </div>
                            <div>
                                <span class='font-weight-bold'>Details: </span><?php echo $d[7]; ?>
                            </div>
                            <div class="" ><a class='btn btn-outline-primary 'href="enquiry.php?id=<?php echo $d[0];?>">Enquiry</a></div>
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