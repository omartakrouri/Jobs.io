<?php require 'head.php'; ?>

    <!-- Page Content -->
    <div class="container">

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
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <img class="d-block img-fluid" src="images/1.jpg" alt="First slide" style="width:100%;height: 400px;">
              </div>
              <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/2.jpg" alt="Second slide" style="width:100%;height: 400px;">
              </div>
              <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/3.jpg" alt="Third slide" style="width:100%;height: 400px;">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
              <div class='col-md-12 col-xs-12'>
                  <h3 style='color:#ff0000;'>Latest Jobs</h3>
              </div>
              <?php
              
              $query="select * from jobs order by date DESC limit 6";
              $result= mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                  while($row= mysqli_fetch_array($result)){
                      ?>
                 <div class="col-lg-4 col-md-6 mb-4">
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
              } ?>
           
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php require 'footer.php'; ?>