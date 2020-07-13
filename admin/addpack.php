<?php
include('header.php');
?>
<div class="col-md-9 text-center">
    <h4>WELCOME TO ADMIN PANEL</h4>
    <form method="post"enctype='multipart/form-data'>
        <table width="95%" align="center" class="shadow border">
            <tr>
                <td colspan="2" class="bg-info py-3 text-white">Add Package</td></tr>
            <tr>
            <td class="m-auto">Package Name</td>
            <td><input type="text" required pattern='[A-Za-z _]{2,50}'title='Please Enter Only character' class="w-75 form-control my-3" name="pack"></td>
            </tr>
            <tr>
                <td>Select Category</td>
                <td class='my-3'><select name="users" class="w-75 float-left form-control " ><option disabled selected value="">Select</option>
                <?php $qry="SELECT * FROM `category`;";
                $run=mysqli_query($conn,$qry);
                while($data=mysqli_fetch_assoc($run)){
                    if(isset($_POST['show']) && $data['id']==$_POST["users"]){
                        ?><option value="<?php echo $data['id']; ?>" selected><?php echo $data['name']; ?></option><?php
                    }
                    else{
                        ?><option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option><?php
                    }
                } ?>                
                </select><input type="submit" name='show' value="Show" formnovalidate> </td>
            </tr>
            <tr>
                <td>Select Sub-Category</td>
                <td><select name="user" class="w-75 form-control my-3" ><option disabled selected value="">Select</option>
                <?php $cid=$_POST['users'];
                 $qr="SELECT `id`, `cid`, `sub-name` FROM `sub-cat` WHERE `cid`='$cid';";
                    $rns=mysqli_query($conn,$qr);
                    while($datas=mysqli_fetch_assoc($rns)){
                        if (isset($_POST['show'])){
                        ?><option value="<?php echo $datas['id']; ?>"><?php echo $datas['sub-name']; ?></option><?php
                    }
                    else{
                        ?><option value="<?php echo $datas['id']; ?>"><?php echo $datas['sub-name']; ?></option><?php
                    }
                    
                } ?>                
                </select> </td>
            </tr>
            <tr>
                <td class="m-auto">Package Price</td>
                <td><input type="text" required pattern='[0-9]{2,50}'title='Please Enter Only number' class="w-75 form-control my-3" name="price"></td>
            </tr>
            <tr><td>Upload Picture 1</td><td><input type="file" required name="pic1" ></td></tr>
            <tr><td>Upload Picture 2</td><td><input type="file" required name="pic2" ></td></tr>
            <tr><td>Details</td><td><textarea name="detail" id="" cols="3" class="w-75 form-control my-3" rows="3"></textarea></td></tr>
            <tr>
            <td colspan="2"><input type="submit" value="Add"name='add' class="w-75 ml-5 form-control my-3"></td></tr>
            <tr><td colspan='2'><p id="demo"></p></td></tr>
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
if(isset($_POST['add'])){
    $pname=$_POST['pack'];
    $cid=$_POST['users'];
    $sid=$_POST['user'];
    $pprice=$_POST['price'];
    $det=$_POST['detail'];
    $imagename1=$_FILES['pic1']['name'];
    $uploadok=1;
    $f1=0;
    $f2=0;
    $imagefiletype=pathinfo($imagename1, PATHINFO_EXTENSION);
    //check if image file is a actual image or fake image
	$check=getimagesize($_FILES["pic1"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
        ?><script>document.getElementById('demo').innerHTML='File is not an image'.</script><?php
		$uploadok=0;
	}
    //check if file already exists
    if(file_exists($imagename1)){
        ?><script>document.getElementById('demo').innerHTML='Sorry, File already exist';</script><?php
        $uploadok=0;
    }
    //check file size
    if($_FILES["pic1"]["size"]>500000){
        ?><script>document.getElementById('demo').innerHTML='Sorry, file size is too large';</script><?php
        $uploadok=0;
    }
    //aloow certain file formats
    if ($imagefiletype!='jpg' && $imagefiletype!='png' && $imagefiletype!='jpeg'){
        ?><script>document.getElementById('demo').innerHTML='Sorry, Only JPG,PNG or JPEG file are allowed';</script><?php
        $uploadok=0;
    }else{
    $tempname1=$_FILES['pic1']['tmp_name'];
    if(move_uploaded_file($tempname1,"../images/package/$imagename1")){
        $f1=1;
    }else{
        echo "sorry there was an error uploading your file.";
    }
}
//file2
$imagename2=$_FILES['pic2']['name'];
$uploadok=1;
$imagefiletype=pathinfo($imagename2, PATHINFO_EXTENSION);
//check if image file is a actual image or fake image
$check=getimagesize($_FILES["pic2"]["tmp_name"]);
if($check!==false) {
    echo "file is an image - ". $check["mime"]. ".";
    $uploadok = 1;
}else{
    ?><script>document.getElementById('demo').innerHTML='File is not an image'.</script><?php
    $uploadok=0;
}
//check if file already exists
if(file_exists($imagename2)){
    ?><script>document.getElementById('demo').innerHTML='Sorry, File already exist';</script><?php
    $uploadok=0;
}
//check file size
if($_FILES["pic2"]["size"]>500000){
    ?><script>document.getElementById('demo').innerHTML='Sorry, file size is too large';</script><?php
    $uploadok=0;
}
//aloow certain file formats
if ($imagefiletype!='jpg' && $imagefiletype!='png' && $imagefiletype!='jpeg'){
    ?><script>document.getElementById('demo').innerHTML='Sorry, Only JPG,PNG or JPEG file are allowed';</script><?php
    $uploadok=0;
}else{
$tempname2=$_FILES['pic2']['tmp_name'];
if(move_uploaded_file($tempname2,"../images/package/$imagename2")){
    $f2=1;
}else{
    echo "sorry there was an error uploading your file.";
}
} 
if($f1>0 && $f2>0){
    $q="INSERT INTO `package`(`name`, `cid`, `sid`, `price`, `pic1`, `pic2`, `detail`) VALUES ('$pname','$cid','$sid','$pprice','$imagename1','$imagename2','$det');";
    $r=mysqli_query($conn,$q);
    if(!$r){
        ?><script>document.getElementById('demo').innerHTML='Package is not add'</script><?php
    }
    else{
        ?><script>document.getElementById('demo').innerHTML="Package is add"</script><?php
    }
}
}
?>
</footer>
</body>
</html>