<?php require 'head.php'; ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-12 main">

          <h2 class="my-3 title">Contact US</h2>
         <hr>
         <div class='col-lg-6'>
             <form action="add_contact.php" method="POST">
                 <?php
                 if(isset($_GET['success'])){
                     ?>
                 <h4 class='success'>Message has been  Sended !</h4>
                     
                 <?php
                 }
                 ?>
                 <div class='form-group'>
                     <input type='text' name='name' class='form-control' placeholder="Enter your name here" required="">
                 </div>
                      <div class='form-group'>
                          <input type='email' name='email' class='form-control' placeholder="Enter your email here" required="">
                 </div>
                  <div class='form-group'>
                      <input type='text' name='tel' class='form-control' placeholder="Enter your telephone here" maxlength="10" required="">
                 </div>
                 <div class='form-group'>
                     <textarea  name='message' class='form-control' placeholder="Enter your message here"  required=""></textarea>
                 </div>
                 <div class='form-group'>
                     <center>
                         <button class='btn btn-danger'>Send</button>
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