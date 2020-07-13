<?php include('header.php');?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form name="myform" method="post"
                    onsubmit="return validateform()">
                <table width="400px" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">Add User</td></tr>
                <tr>
                    <td class="m-auto">User Name</td>
                    <td><input type="text" class="w-75 form-control my-3" name="name" required pattern="[a-zA-z1 _]{3,50}" title="Please Enter Only Characters and numbers between 3 to 50 for User name"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" class="w-75 form-control my-3" required min-length='4' pattern='[A-Za-z0-9]{4,10}'title='Please Enter Only Characters and numbers and minimum length is 4'><span id="error"></span></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="pass1" class="w-75 form-control my-3" required pattern='[A-Za-z0-9]{4,10}'title='Please Match previous password'><span id="error"></span></td>
                    
                </tr>
                <tr>
                    <td>Type of User</td>
                    <td>
                    <select name='types' class="w-75 form-control my-3" >
                        <option disabled selected value="1">Select</option>
                        <option value="General">General</option>
                        <option value="Admin">Admin</option>
                    </select> 
                    </td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" name="add" value="Add" class="w-75 ml-5 form-control my-3"></td></tr>
                <tr><td colspan="2"><p id="demo"></p></td></tr>
                </table>
            </form>
                </div>
            </div>
        </div>
    </section>
<footer>
    <div class="text-right">
        <p class="mb-0">@harshita2020</p>
</div>
</footer>
<?php
if (isset($_POST['add'])){
    $name=$_POST['name'];
    $password=$_POST['pass'];
    $user_type=$_POST['types'];
    $qry="INSERT INTO `admin`(`uname`, `password`, `userType`) VALUES ('$name','$password','$user_type');";
    $run=mysqli_query($conn,$qry);
    if($run==True){
        ?><script>document.getElementById("demo").innerHTML = "User is Add";</script><?php
    }
    else{
        ?><script>document.getElementById("demo").innerHTML = "User is not Add";</script><?php
    }
}
?>
<script>
function validateform(){
    var pass1=document.myform.pass.value;
    var pass2=document.myform.pass1.value;
    if (pass1!=pass2){
        document.getElementById('error').innerHTML="Password must be same";
        return false;
    }
    else{
        return true;
    }
}
</script>
</body>
</html>