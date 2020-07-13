<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body class='pt-5 mt-3'>
    <nav class="navbar navbar-expand-md bg-white navbar-light fixed-top border-bottom">
        <a href="index.php" class="navbar-brand"><img src="images/logo.jpg" alt="" width='120px'></a>
        <button class="navbar-toggler" data-toggle='collapse' data-target='#navbar01' aria-controls='navbar01' aria-expanded='false' type='button' aria-label='Toggle navigation'><span class="navbar-toggler-icon"></span></button> 
        <div class='collapse navbar-collapse' id="navbar01">
        <ul class="navbar-nav ml-auto">
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
        </div>
    </nav>
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
                        <!-- <a href="subcat.php">Family Tour</a>
                        <a href="subcat.php">Religious Tours</a>
                        <a href="subcat.php">Adventure Tours</a>
                        <a href="subcat.php">Special Event Tours</a>
                        <a href="subcat.php">National Tours</a>
                        <a href="subcat.php">Themed Tours</a>
                        <a href="subcat.php">Small Group Tours</a> -->
                    </div>
                    <div class="col-sm-9">
                        <h4 class="text-primary ">Welcome to Go Travel & Tourism Ltd</h4>
                        <p class='text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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