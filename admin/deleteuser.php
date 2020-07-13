<?php include('header.php'); ?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post">
                <table width="400px" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">Delete User</td></tr>
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
                <td colspan="2"><input type="submit" name="delete" value="Delete" class="w-75 ml-5 form-control my-3"></td></tr>
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
if (isset($_POST['delete'])){
    $user=$_POST['user'];
    $query="DELETE FROM `admin` WHERE `uname`='$user';";
    $dlt=mysqli_query($conn,$query);
    if (!$dlt){
        ?><script>document.getElementById("demo").innerHTML = "Delete is unsuccessful";</script><?php
    }
    else{
        ?><script>document.getElementById("demo").innerHTML = "Delete is successful";</script><?php
    }
}
?>
</body>
</html>