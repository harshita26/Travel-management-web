<?php
include('header.php');
?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post">
                <table width="400px" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">Update Category</td></tr>
                <tr>
                    <td>Select Category Name</td>
                    <td><select name="user" class="w-75 form-control my-3" ><option disabled selected value="">Select</option><?php $qry="SELECT * FROM `category`;";
                    $run=mysqli_query($conn,$qry); while($data=mysqli_fetch_assoc($run)){
                        ?><option value="<?php echo $data['name'];?>"><?php echo $data['name'];?></option><?php
                    }?></td>
                </tr>
                <tr>
                    <td class="m-auto">Category Name</td>
                    <td><input type="text" class="w-75 form-control my-3" required pattern='[A-Za-z _]{2,50}' title='Please enter only character' name="name"></td>
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
    $query="UPDATE `category` SET `name`='$name' WHERE `name`='$user';";
    $updates=mysqli_query($conn,$query);
    if (!$updates){
        ?><script>document.getElementById("demo").innerHTML = "Update is unsuccessful";</script><?php
    }
    else{
        ?><script>document.getElementById("demo").innerHTML = "Update is successful";</script><?php
    }
}
?>
</body>
</html>