<?php
  require ('head.php');
  
  
  
  if(isset($_GET['id'])){
  $user_id=$_GET['id'];
  
  
  $query = "SELECT * FROM jobs WHERE user_id = $user_id";
  $res = mysqli_query($conn, $query);
  if(mysqli_num_rows($res)>0){
    ?>
<div class="container">
  <div class="row">
    <?php
      while($row= mysqli_fetch_array($res)){
      
                            ?>
    <div class="col-md-4 ">
      <div class="card h-100">
        <a href="job.php?id=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['image']; ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="job.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
          </h4>
          <h5><?php echo $row['company_name']."( ".$row['city']." )"; ?></h5>
          <h5>Salary: <?php echo $row['salary']."$"; ?></h5>
        </div>
        <div>
        <button type="button" class="btn btn-success">edit</button>
        
        <button type="button" class="btn btn-danger"href='delete.php?id=" . $jobs['id'] ."'> Delete</button> 
        
        
      </div>
        <div class="card-footer">
          <center>
            <a href='job.php?id=<?php echo $row['id']; ?>'><b >Read More</b></a>
          </center>
        </div>
      </div>
    </div>
    <?php
      }
      }else{
      ?>
    <h3 class='wrong'>No Jobs Addeded</h3>
    <?php
      } 
      }
      ?>
  </div>
</div>
<!-- /.row -->
</div>
<!-- /.col-lg-9 -->
</div>
<!-- /.row -->
</div>
<br>
<!-- /.container -->
<?php require 'footer.php'; ?>