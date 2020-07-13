<?php include('header.php'); ?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form name="myform" method="post" onsubmit='return validates()'>
                <table width="95%" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">Update User</td></tr>
                <tr>
                    <td>Select User</td>
                    <td><select name="user" class="w-75 form-control my-3"><option disabled selected value="">Select</option><?php $qry="SELECT * FROM `admin`;";
                     $run=mysqli_query($conn,$qry);
                     while($data=mysqli_fetch_assoc($run)){
                        ?><option value="<?php echo $data['uname'];?>"><?php echo $data['uname'];?></option><?php
                    } ?>
                </select></td>
                </tr>
                <tr>
                    <td class="m-auto">User Name</td>
                    <td><input type="text" required pattern='[A-za-Z1 _]{3,30}'title='Please enter only character or number' class="w-75 form-control my-3" name="name"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" required pattern='[A-Za-z0-9]{4,10}'title='Please enter only character or number and minimum length is 4' class="w-75 form-control my-3"><span id='error'></span></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="pass1" required pattern='[A-Za-z0-9]{4,10}'title='Please enter only character or number and minimum length is 4' class="w-75 form-control my-3"><span id='error'></span></td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" name='update' value="Update" class="w-75 ml-5 form-control my-3"></td></tr>
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
if (isset($_POST['update'])){
    $user=$_POST['user'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $query="UPDATE `admin` SET `uname`='$name',`password`='$pass' WHERE `uname`='$user';";
    $updates=mysqli_query($conn,$query);
    if (!$updates){
        ?><script>document.getElementById("demo").innerHTML = "Update is unsuccessful";</script><?php
    }
    else{
        ?><script>document.getElementById("demo").innerHTML = "Update is successful";</script><?php
    }
}
?>
<script>
function validates(){
    var pass1=document.myform.pass.value;
    var pass2=document.myform.pass1.value;
    if(pass1!=pass2){
        document.getElementById('error').innerHTML="Password must be same";
        return false;
    }
}
</script>
</body>
</html>