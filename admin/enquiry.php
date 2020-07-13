<?php include('header.php');?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post">
                <table width="95%" align="center" class="shadow border">
                <tr><td colspan="8" class="bg-info py-3 text-white">View Enquiry</td></tr>
                <tr><td>Booking Id</td><td>Name</td><td>Gender</td><td>Mail id</td><td>No. of days</td><td>No. of adult</td><td>No. of children</td><td>Message</td></tr>
                <?php $qry="SELECT * FROM `enquiry`";
                $run=mysqli_query($conn,$qry);
                $count=1;
                while($data=mysqli_fetch_array($run)){
                    ?><tr><td><?php echo $count; $count++;?></td><td><?php echo $data[2];?></td><td><?php echo $data[3];?></td><td><?php echo $data[5];?></td><td><?php echo $data[6];?></td><td><?php echo $data[7];?></td><td><?php echo $data[8];?></td><td><?php echo $data[9];?></td></tr><?php
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