<section>
  <select name="brandlist[]" multiple class="form-control">
    <?php
        include "db.php";  // Using database connection file here
          try {

               $sql = "select theatre_name from theatre";
               $result = $conn->prepare($sql);
               $result->execute();
                                            
                 while($row = $result->fetch())
                 {
    ?>
     <option value='<?php echo  $row['theatre_name'] ?>'><?php echo $row['theatre_name'] ?> </option>
            <?php } 
            } catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>

    
 </select>
 </section>
