<?php
include('header.php');
?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post" enctype='multipart/form-data'>
                <table width="400px" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">Add Sub-Category</td></tr>
                <tr>
                    <td class="m-auto">Sub-Category Name</td>
                    <td><input type="text" class="w-75 form-control my-3" required pattern='[A-Za-z _]{2,50}'title='Please enter only character' name="name"></td>
                </tr>
                <tr>
                    <td>Select Category</td>
                    <td><select name="cname" class="w-75 form-control my-3" ><option disabled selected value="">Select</option>
                    <?php $qry="SELECT * FROM `category`;";
                    $run=mysqli_query($conn,$qry);
                    while($data=mysqli_fetch_assoc($run)){
                        ?><option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option><?php
                    } ?>
                </select> </td>
                </tr>
                <tr><td>Upload Picture</td><td><input type="file" required name="pic" ></td></tr>
                <tr><td>Details</td><td><textarea name="detail" id="" cols="3" class="w-75 form-control my-3" rows="3"required pattern='[A-Za-z0-9 _]{1,50}'title='Not empty'></textarea></td></tr>
                <tr>
                <td colspan="2"><input type="submit" value="Add" name='add' class="w-75 ml-5 form-control my-3"></td></tr>
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
    $cid=$_POST['cname'];
    $sname=$_POST['name'];
    $details=$_POST['detail'];
    $picture=$_FILES['pic']['name'];
    $uploadok=1;
    $imagefiletype=pathinfo($picture, PATHINFO_EXTENSION);
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
    if(file_exists($picture)){
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
        if(move_uploaded_file($tempname,"../images/datapic/$picture")){
            $qury="INSERT INTO `sub-cat`(`cid`, `sub-name`, `details`, `picture`) VALUES ('$cid','$sname','$details','$picture')";
            $adds=mysqli_query($conn,$qury);
            if(!$adds){
                ?><script>document.getElementById('demo').innerHTML='Sub-Category is not add';</script><?php
            }
            else{
                ?><script>document.getElementById('demo').innerHTML='Sub-Category is add';</script><?php
            }
        }else{
            echo "sorry there was an error uploading your file.";
        }
}
}
?>
</body>
</html>