<?php require 'head.php'; ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-12 main">

          <h2 class="my-3 title">Register</h2>
         <hr>
         <div class='col-lg-6'>
             <form action="add_user.php" method="POST">
                 <?php
                 if(isset($_GET['success'])){
                     ?>
                 <h4 class='success'>Your Account Has been Created !</h4>
                     
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
                          <input type='email' name='email' class='form-control' placeholder="Enter your email here" required="">
                 </div>
                  <div class='form-group'>
                      <input type='text' name='tel' class='form-control' placeholder="Enter your telephone here" maxlength="10" required="">
                 </div>
                 <div class='form-group'>
                     <textarea  name='address' class='form-control' placeholder="Enter your address here"  required=""></textarea>
                 </div>
                 <div class='form-group'>
                     <center>
                         <button class='btn btn-danger'>Register</button>
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