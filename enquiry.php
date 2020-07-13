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
                    <div class="col-sm-9">
                        <h4 class="text-primary">View Package</h4>
                        
                            <form action="" method="post">
                            <table width="80%" class='topp'>
                              <tr>
                                 <td>Package Name:</td><td><?php $pids=$_GET['pid'];
                        $qury="SELECT * FROM `package` WHERE `id`='$pids';";
                        $runs=mysqli_query($conn,$qury);
                        while($d=mysqli_fetch_array($runs)){
                            ?><div class=" float-left w-50">
                            <div class=""><span class='font-weight-bold'> </span><?php echo $d[1];}?></td>
                              </tr>
                              <tr><td>Name: </td><td><input type="text"name='name'required pattern='[A-Za-z ]{2,30}'title='Enter only character' class="form-control"></td></tr>
                              <tr><td>Gender: </td><td><select class='form-control' required name="gender">
                              <option value="0"disabled selected>Select</option>
                              <option value="Female">Female</option>
                              <option value="Male">Male</option></select></td></tr>
                              <tr><td>Mobile Number: </td><td><input type="tel" class="form-control"required pattern='[0-9+ ]{9,15}'title="Enter valid phone number"name='phone'></td></tr>
                              <tr><td>Email: </td><td><input type="email"required name="mail" class='form-control'></td> </tr>
                              <tr><td>Number of Days: </td><td><input type="number" name="days"required class='form-control'></td></tr>
                              <tr><td>Number of Children: </td><td><input type="number" name="child" required class='form-control'></td></tr>
                              <tr><td>Number of Adult: </td><td><input type="number" name="adt" required class='form-control'></td></tr>
                              <tr><td>Message: </td><td><textarea name="msg"class='form-control' cols="30" rows="3"></textarea></td></tr>
                              <tr><td colspan='2' class=''><input type='submit'class='mx-auto form-control btn-outline-primary w-50'name='book'value='Book'></td></tr>
                              <tr><td colspan='2' class='text-center text-primary'><p id="demo"></p></td></tr>
                            </table>
                              
                            </form>
                            </div>
                            
                            </div>
                            
                    </div>
                </div>
            </div>
        </section>
   <?php
   if(isset($_POST['book'])){
   $name=$_POST['name'];
   $gender=$_POST['gender'];
   $phone=$_POST['phone'];
   $mail=$_POST['mail'];
   $day=$_POST['days'];
   $children=$_POST['child'];
   $adult=$_POST['adt'];
   $message=$_POST['msg'];
   $q="INSERT INTO `enquiry`(`pid`, `name`, `gender`, `phone`, `mail`, `day`, `adult`, `children`, `msg`) VALUES ('$pids','$name','$gender','$phone','$mail','$day','$adult','$children','$message')";
   $r=mysqli_query($conn,$q);
   if(!$r){
      ?><script>document.getElementById('demo').innerHTML='Your Room is not Booked'</script><?php
   }else{
      ?><script>document.getElementById('demo').innerHTML='Your Room is Booked'</script><?php
   }
   }
   ?>
   
   

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