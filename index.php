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
    <style>
        .pics{padding:inherit;}
    </style>
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
        <div class="cont">
            <img src="images/main.jpg" class="img-fluid" alt="">
            <div class="rows">
                   <p class="para">Your Trusted Travel Packages and Services</p>
                   <hr class="bg-dark">
                   <p>Go Travel & Tourism Ltd</p> 
            </div>
        </div>
   
    <section>
        <div class="container pb-2 pt-5" id="about">
            <div class="row py-3">
                <div class="col-12"><h3 class="text-primary text-center">About Us</h3></div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-4 text-center">
                    <h5>Our Vision</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe est, quis animi ab impedit, aspernatur blanditiis quam eligendi quasi molestias, molestiae reiciendis placeat in qui deleniti architecto iure maxime laboriosam!</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h5>Our Mission</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe est, quis animi ab impedit, aspernatur blanditiis quam eligendi quasi molestias, molestiae reiciendis placeat in qui deleniti architecto iure maxime laboriosam!</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h5>Safety Information</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe est, quis animi ab impedit, aspernatur blanditiis quam eligendi quasi molestias, molestiae reiciendis placeat in qui deleniti architecto iure maxime laboriosam!</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pb-2 pt-5" id="gallery">
            <div class="row">
                <div class="col-12 py-4"><h3 class="text-primary text-center">Gallery</h3></div>
            </div>
            <div class="row">
                <div class="col-sm-3 pics"><img class='img-fluid' src="images/t1.jpg" alt=""></div>
                <div class="col-sm-3 pics"><img class='img-fluid 'src="images/t2.jpg" alt=""></div>
                <div class="col-sm-3 pics"><img class='img-fluid 'src="images/t3.jpg" alt=""></div>
                <div class="col-sm-3 pics"><img class='img-fluid 'src="images/t4.jpg" alt=""></div>
            </div>
            <div class="row">
                <div class="col-sm-3 pics"><img class='img-fluid 'src="images/t5.jpg" alt=""></div>
                <div class="col-sm-3 pics"><img class='img-fluid 'src="images/t6.jpg" alt=""></div>
                <div class="col-sm-3 pics"><img class='img-fluid 'src="images/t7.jpg" alt=""></div>
                <div class="col-sm-3 pics"><img class='img-fluid 'src="images/t8.jpg" alt=""></div>
            </div>
        </div>
    </section>
<section>
    <div class="container py-5" id="contact">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="text-primary ">Contact Us</h3>
                <h5>Plan Your Trip</h5>
                <p>Our travel experts can help you book now</p>
                <form method="post">
                    <div class="form-group">
                        <input type="text" pattern='[a-zA-Z _]{2,20}'title='Please enter only character'required name="name" class="form-control fors"id="" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="tel" required pattern='[0-9_ +]{10,15}' title='please enter valid phone number'name="contact" class="form-control fors" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" required pattern='[A-Za-z0-9_.@]{2,50}'title= 'enter valid email id' class="form-control fors" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea name="msg" class="form-control fors"required cols="30" rows="10"Placeholder="Message" ></textarea>
                    </div>
                    <input type="submit" value="Send Message" name='send' class="btn btn-primary">
                    <p id="demo"></p>
                </form>
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
<?php
if(isset($_POST['send'])){
    include('db.php');
    $name=$_POST['name'];
    $phone=$_POST['contact'];
    $mail=$_POST['email'];
    $message=$_POST['msg'];
    $qry="INSERT INTO `contact`(`name`, `phone`, `mail`, `msg`) VALUES ('$name','$phone','$mail','$message');";
    $run=mysqli_query($conn,$qry);
    if(!$run){
        ?><script>document.getElementById('demo').innerHTML="Your Message is not Send";</script><?php
    }else{
        ?><script>document.getElementById('demo').innerHTML="Your Message is Send";</script><?php
    }
}
?>
</body>
</html>