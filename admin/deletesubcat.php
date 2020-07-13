<?php 
include('header.php');
?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post">
                <table width="400px" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">Delete Sub-Category</td></tr>
                <tr>
                    <td>Select Category</td>
                    <td><select name="users" class="w-75 form-control my-3" ><option disabled selected value="">Select</option>
                    <?php $qy="SELECT * FROM `category`;";
                    $r=mysqli_query($conn,$qy);
                    while($res=mysqli_fetch_assoc($r)){
                        ?><option value="<?php echo $res['id'];?>"><?php echo $res['name'];?></option><?php
                    }?>
                </select> </td>
                </tr>
                <tr>
                    <td>Select Sub-Category</td>
                    <td><select name="user" class="w-75 form-control my-3" ><option disabled selected value="">Select</option>
                <?php
                $qry="SELECT `id`, `sub-name` FROM `sub-cat`;";
                $run=mysqli_query($conn,$qry);
                while($data=mysqli_fetch_assoc($run)){
                    ?><option value="<?php echo $data['id']; ?>"><?php echo $data['sub-name'];?></option><?php
                }
                ?></select> </td>
                </tr>
                <td colspan="2"><input type="submit" value="Delete"name='dlt' class="w-75 ml-5 form-control my-3"></td></tr>
                <tr><td colspan='2'><p id="demo"></p></td></tr>
                </table>
            </form>
                </div>
            </div>
        </div>
    </section>
<footer>
    <div class="text-right">
        <p class=" mb-0">@harshita2020</p>
</div>
</footer>
<?php
if(isset($_POST['dlt'])){
    $sid=$_POST['user'];
    $q="DELETE FROM `sub-cat` WHERE `id`='$sid';";
    $runs=mysqli_query($conn,$q);
    if(!runs){
        ?><script>document.getElementById('demo').innerHTML='Delete is unsuccessful';</script><?php
    }
    else{
        ?><script>document.getElementById('demo').innerHTML='Delete is successful';</script><?php
    }
}
?>
</body>
</html>