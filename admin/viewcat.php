<?php
include('header.php');
?>
                <div class="col-md-9 text-center">
                    <h4>WELCOME TO ADMIN PANEL</h4>
                    <form action="" class="" method="post">
                <table width="400px" align="center" class="shadow border">
                <tr>
                <td colspan="2" class="bg-info py-3 text-white">View Category</td></tr>
                <tr><th>Category Id</th>
                <th>Category Name</th></tr>
                <?php $qry="SELECT * FROM `category`;";
                  $run=mysqli_query($conn,$qry);
                  $count=1;
                 while($data=mysqli_fetch_assoc($run)){
                        ?><tr><td><?php echo $count; $count++;?></td><td><?php echo $data['name'];?></td></tr><?php
                    }?>
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