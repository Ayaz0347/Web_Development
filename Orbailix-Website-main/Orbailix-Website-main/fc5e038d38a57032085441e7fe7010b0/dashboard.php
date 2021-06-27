<?php 
include('includes/header.php');
include_once('../db/connection.php');

if( !isset($_SESSION['email'])){
    header("Location: ../index.php");
}else{
    
$sql = "SELECT * From jobs";
$sql_query =  mysqli_query($conn, $sql);
$no =0;
?>




<section class="mt-5">
<div class="row">
        <!-- right side of form -->
        <div class="col-7 mx-auto">
            <div class="form-container-box  px-0 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Despscription</th>
                            <th scope="col">Due date</th>
                            <th scope="col">Add From</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php while($result = mysqli_fetch_assoc($sql_query)){?>
                        <tr>
                            <th scope="row"><?php  $no = $no+1; echo $no ?></th>
                            <td><span style="color: white"><?php echo $result['title'];?></span></td>
                            <td><span style="color: white"><?php echo $result['desp'];?></span></td>
                            <td><span style="color: white"><?php echo $result['date'];?></span></td>
                            <td><span style="color: white"><?php echo $result['ip'];?></span></td>
                            <td><span style="color: white"><a href="delete.php?id=<?php echo $result['id'];?>"><button class="btn btn-danger" >Delete</button></a></span></td>
                            
                           
                        </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div> <!-- end of row -->
</section>


<?php }include('includes/footer.php'); ?>