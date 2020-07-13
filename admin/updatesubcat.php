<?php
include('header.php');
?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post"enctype='multipart/form-data'>
                <table width="90%" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">Update Sub-Category</td></tr>
                <tr>
                    <td>Select Sub-Category</td>
                    <td><select name="sub" class="my-3 w-75 form-control float-left" ><option disabled selected value="">Select</option>
                    <?php $q="SELECT * FROM `sub-cat`;";
                    $r=mysqli_query($conn,$q);
                    while($res=mysqli_fetch_array($r)){
                        if(isset($_POST['show']) && $res[0]==$_POST["sub"]){
                            ?><option value="<?php echo $res[0];?>" selected><?php echo $res[2];?></option><?php
                        }
                        else{
                        ?><option value="<?php echo $res[0];?>"><?php echo $res[2];?></option><?php
                    }
                    } ?>
                </select><input type="submit" value="Show" name='show' class='my-3' formnovalidate> </td>
                </tr>
                <?php
                if(isset($_POST["show"])){
                $sid=$_POST['sub'];
                $q1="SELECT * FROM `sub-cat` WHERE `id`='$sid';";
                $r1=mysqli_query($conn,$q1);
                $datas=mysqli_fetch_array($r1);
                $Subcatid=$datas[0];
                $Catid=$datas[1];
                $Subcatname=$datas[2];
                $Detail=$datas[3];
                $Pic=$datas[4];
                }
                ?>
                <tr>
                    <td class="m-auto">Sub-Category Name</td>
                    <td><input type="text" class="w-75 form-control my-3" required pattern='[A-Za-z _]{2,50}'title='Please enter only character' value="<?php if(isset($_POST['show'])){echo $Subcatname;} else echo ""; ?>" name="name"></td>
                </tr>

                <tr>
                    <td>Select Category</td>
                    <td><select name="user" class="w-75 form-control my-3" value='<?php
                    $qry="SELECT * FROM `category`;";
                    $run=mysqli_query($conn,$qry);
                    if(isset($_POST['show']) ){echo $Catid;} else ""; ?>'><option disabled selected value="0">Select</option>
                    <?php while($data=mysqli_fetch_array($run)){
                        if(isset($_POST['show']) && $data[0]==$Catid){
                            ?><option value="<?php echo $data[0];?>" selected><?php echo $data[1];?></option><?php
                        }
                        else{
                        ?><option value="<?php echo $data[0];?>"><?php echo $data[1];?></option><?php
                    }
                    } ?></select> </td>
                </tr>
                <tr><td>Old Picture</td><td><img src="../images/datapic/<?php echo $Pic;?>" width='200px' height='100px' class="float-left" ></td></tr>
                <tr><td>Upload Picture</td><td><input type="file" name="pic"></td></tr>
                <tr><td>Details</td><td><textarea name="detail" id="" cols="3"required pattern='[A-Za-z0-9 _]{2,50}'title='Please enter only character' class="w-75 form-control my-3" rows="3"><?php if(isset($_POST['show'])){echo $Detail;} else echo""; ?></textarea></td></tr>
                <tr>
                <td colspan="2"><input type="submit" value="Update" name='update' class="w-75 ml-5 form-control my-3"></td></tr>
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
<?php
if (isset($_POST['update'])){
    $cid=$_POST['user'];
    $sid=$_POST['sub'];
    $sname=$_POST['name'];
    $details=$_POST['detail'];
    $imagename=$_FILES['pic']['name'];
    $uploadok=1;
    $imagefiletype=pathinfo($imagename, PATHINFO_EXTENSION);
    //check if image file is a actual image or fake image
	$check=getimagesize($_FILES["pic"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
        ?><script>document.getElementById('demo').innerHTML='File is not an image'.</script><?php
		$uploadOk=0;
	}
    //check if file already exists
    if(file_exists($imagename)){
        ?><script>document.getElementById('demo').innerHTML='Sorry, File already exist';</script><?php
        $uploadok=0;
    }
    //check file size
    if($_FILES["pic"]["size"]>500000){
        ?><script>document.getElementById('demo').innerHTML='Sorry, file size is too large';</script><?php
        $uploadOk=0;
    }
    //aloow certain file formats
    if ($imagefiletype!='jpg' && $imagefiletype!='png' && $imagefiletype!='jpeg'){
        ?><script>document.getElementById('demo').innerHTML='Sorry, Only JPG,PNG or JPEG file are allowed';</script><?php
        $uploadOk=0;
    }else{
        $tempname=$_FILES['pic']['tmp_name'];
        if(move_uploaded_file($tempname,"../images/datapic/$imagename")){ 
            $qury="UPDATE `sub-cat` SET `cid`='$cid',`sub-name`='$sname',`details`='$details',`picture`='$imagename' WHERE `id`='$sid';";
            $result=mysqli_query($conn,$qury);
            if(!$result){
                ?><script>document.getElementById('demo').innerHTML='Update is unsuccessful';</script><?php
            }
            else{
                ?><script>document.getElementById('demo').innerHTML='Update is successful';</script><?PHP
            }
        }else{
            echo "sorry there was an error uploading your file.";
        }
        
    }
}
?>
</footer>
</body>
</html>