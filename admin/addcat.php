<?php include('header.php');
?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post">
                <table width="400px" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">Add Category</td></tr>
                <tr>
                    <td class="m-auto">Category Name</td>
                    <td><input type="text" pattern='[A-Za-z _]{2,50}'title='please Enter only character' class="w-75 form-control my-3" name="name"></td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" name='add' value="Save" class="w-75 ml-5 form-control my-3"></td></tr>
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
    $qry="INSERT INTO `category`(`name`) VALUES ('$name');";
    $run=mysqli_query($conn,$qry);
    if($run==True){
        ?><script>document.getElementById("demo").innerHTML = "Category is Add";</script><?php
    }
    else{
        ?><script>document.getElementById("demo").innerHTML = "Category is not Add";</script><?php
    }
}
?>
</body>
</html>