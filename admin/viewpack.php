<?php 
include('header.php');
?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post">
                <table width="95%" align="center" class="shadow border">
                <tr>
                <td colspan="6" class="bg-info py-3 text-white">View Package</td></tr>
                <tr><th>Sr.</th><th>Package Name</th><th>Package price</th><th colspan='2'>Images</th><th>Details</th></tr>
                <?php $qry="SELECT * FROM `package`;";
                $run=mysqli_query($conn,$qry);
                $count=1;
                while($data=mysqli_fetch_assoc($run)){
                    ?><tr><td><?php echo $count; $count+=1;?></td><td><?php echo $data['name'];?></td><td><?php echo $data['price'];?></td><td><img src="../images/package/<?php echo $data['pic1']; ?>" width='50px'height='50px'></td><td><img src="../images/package/<?php echo $data['pic2'];?>" width='50px'height='50px'></td><td><?php echo $data['detail'];?></td></tr><?PHP
                } ?>
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
</body>
</html>