



<?php include 'header.php';  ?>


        <div class="container">
          
        <h1 class="text-center my-5">Booked Users</h1>

        <?php 
                include 'connection.php';
               
                $sql = " SELECT * FROM booking_list";
                $result= mysqli_query($con, $sql);
        ?>
      
        
        <?php
            if (mysqli_num_rows($result)>0) {
                
            

          ?>
          
        <table class="table table-bordered my-5 text-center">
            <thead>
    
                <th>Booking Id</th>
                <th>Movie Id</th>
                <th>Theater Id</th>
                <th>User</th>
                <th>Contact Number</th>
                <th>Date</th>
                <th>Time</th>
                <th>Seat Number</th>
                <th>Price</th>
                <th colspan="2">Action</th>
               
                
    

    
            </thead>
            <tbody>
                <?php 
                    while ($row=mysqli_fetch_array($result)) {
                    ?>
                <tr>
                
                    <td><?php echo $row['booking_id']; ?></td>
                    <td><?php echo $row['movie_id']; ?></td>
                    <td><?php echo $row['theater_id']; ?></td>
                    <td><?php echo $row['user']; ?></td>
                    <td><?php echo $row['contact_no']; ?></td>
                    <td><?php echo $row['dates']; ?></td>
                    <td><?php echo $row['timee']; ?></td>
                    <td><?php echo $row['seat_no']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><a href="update_stu.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Update</a></td>
                    <td><a href="delete_stu.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
            
                    
                </tr>
            <?php } ?>
            </tbody>
        </table>



    <?php } ?>
   
    

    

</div>
