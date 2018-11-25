<?php require 'head.php'; ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-12 main">

          <h2 class="my-3 title">Login </h2>
         <hr>
         <div class='col-lg-6'>
             <form action="check_user.php" method="POST">
                 <?php
                 if(isset($_GET['wrong'])){
                     ?>
                 <h4 class='wrong'>Wrong username or password!</h4>
                     
                 <?php
                 }
                 ?>
                 <div class='form-group'>
                     <input type='text' name='username' class='form-control' placeholder="Enter your username here" required="">
                 </div>
                     <div class='form-group'>
                     <input type='password' name='password' class='form-control' placeholder="Enter your Password here" required="">
                 </div>
                    
                 <div class='form-group'>
                     <center>
                         <button class='btn btn-danger'>Login</button>
                     </center>
                 </div>
                     
             </form>
             
         </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php require 'footer.php'; ?>