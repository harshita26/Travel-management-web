<?php
include('db.php');
session_start();
if (isset($_SESSION['uid'])){
    header('location:admin/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <section class="my-5">
        <div class="mt border border-primary shadow p-5 mx-auto">
            <form action="admin.php" method="post">
                <table class="mx-auto">
                    <tr><th colspan='2'class='text-primary text-center'>ADMIN LOGIN</th></tr>
                <tr>
                    <td class="m-auto">User Name</td>
                    <td><input type="text" class="form-control my-3" name="name"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" class="form-control my-3"></td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" name="login" value="Login" class="form-control mt-3"></td>
                </tr>
                <tr>
                <td colspan="2"><p id="demo"></p></td>
                </tr>
                </table>
            </form>
        </div>
    </section>
</body>
</html>
<?php
if (isset($_POST['login'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $qry="SELECT `id` FROM `admin` WHERE `uname`='$name' AND `password`='$pass';";
    $run=mysqli_query($conn,$qry);
    if(mysqli_num_rows($run)<1){
        ?><script>document.getElementById("demo").innerHTML = "Login is not Done";</script><?php
     }
    else{
        ?><script>document.getElementById("demo").innerHTML = "Login is successful";window.open('admin/index.php','_self')</script><?php
        $data=mysqli_fetch_assoc($run);
        $uid=$data['id'];
        $_SESSION['uid']='$uid';
    }
}
?>