<?php require 'head.php'; 
 if(isset($_SESSION['id'])){

?>


    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-12 main" style='height: 1100px !important;'>

          <h2 class="my-3 title">Add Job</h2>
         <hr>
         <div class='col-lg-6'>
             <form action="add_job.php" method="POST"  enctype="multipart/form-data">
                 <?php
                 if(isset($_GET['success'])){
                     ?>
                 <h4 class='success'>Job has been  Addeded !</h4>
                     
                 <?php
                 }
                 ?>
                 <div class='form-group'>
                     <input type='text' name='title' class='form-control' placeholder="Enter Job Title" required="">
                 </div>
                  <div class='form-group'>
                     <input type='text' name='company_name' class='form-control' placeholder="Enter Company Name" required="">
                 </div>
                   <div class='form-group'>
                     <input type='text' name='city' class='form-control' placeholder="Enter City" required="">
                 </div>
                 <div class='form-group'>
                     <input type='text' name='address' class='form-control' placeholder="Enter Company Address" required="">
                 </div>
                   <div class='form-group'>
                     <input type='text' name='street' class='form-control' placeholder="Enter Street Name" required="">
                 </div>
                  <div class='form-group'>
                          <input type='email' name='email' class='form-control' placeholder="Enter your email here" required="">
                 </div>
                  <div class='form-group'>
                      <input type='text' name='tel' class='form-control' placeholder="Enter your telephone here" maxlength="10" required="">
                 </div>
                    <div class='form-group'>
                     <input type='text' name='salary' class='form-control' placeholder="Enter Job Salary" required="">
                 </div>
                  
                   <div class='form-group'>
                     <textarea  name='description' class='form-control' placeholder="Enter Job Description"  required=""></textarea>
                 </div>
                     <div class='form-group'>
                          <p>Image</p>
                          <input type='file' name='image' class='form-control'  >
                 </div>
                  <div class='form-group'>
                      
                      <select name='category' class='form-control' required="">
                          <option value=''>Select Category</option>
                          <option >Full Time</option>
                          <option >Part Time</option>

                      </select>
                 </div>
               
                 <div class='form-group'>
                     <center>
                         <button class='btn btn-danger'>Add </button>
                     </center>
                 </div>
                     
             </form>
             
         </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  <?php
  }else{
    header("location:login.php");
  }?>

<?php require 'footer.php'; ?>
