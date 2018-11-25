<?php require 'head.php'; ?>
<style type="text/css">
  .col-md-4{
    margin-right: 0px !important;
    display: inline-block;
  }
</style>
    <!-- Page Content -->
    <div class="container" style='min-height: 1000px;'>

      <div class="row">

       <div class="col-lg-3">

          <h1 class="my-4">Jobs</h1>
          <form action="jobs.php" method="POST">
              <select name='category' class='form-control' required="" onchange="this.form.submit()">
                          <option value=''>Select Category</option>
                          <option >Full Time</option>
                          <option >Part Time</option>

                      </select>
          </form>
        </div>

        <div class="col-md-9">
<br><br>
        <div class='row'>
                  <h3 style='color:#ff0000;'>Last Jobs</h3>
              </div>
              <?php
              if(isset($_POST['category'])){
                $x = $_POST['category'];
                   $query="select * from jobs where category='$x' order by date DESC limit 6";
              $result= mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                  while($row= mysqli_fetch_array($result)){
                    
                              
                      ?>
                <div class="col-md-6 mb-4">
              <div class="card h-100">
                <a href="job.php?id=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['image']; ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                      <a href="job.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                  </h4>
                                      <h5><?php echo $row['company_name']."( ".$row['city']." )"; ?></h5>

                  <h5>Salary: <?php echo $row['salary']."$"; ?></h5>
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
              }else{
                   $query="select * from jobs order by date DESC limit 6";
              $result= mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                  while($row= mysqli_fetch_array($result)){
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
    <!-- /.container -->
<?php require 'footer.php'; ?>