<?php require 'head.php'; 

$id=$_GET['id'];
$query="SELECT * from jobs where id=$id";
$result= mysqli_query($conn,$query);
$row= mysqli_fetch_array($result);

?>

    <!-- Page Content -->
    <div class="container" style='min-height: 1000px;'>

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Job Detail</h1>
          <div class="img_left">
            <img src='<?php echo $row['image']; ?>' >
          </div>

        </div>

        <div class="col-lg-8">
<br><br>
<table class='table table-striped'>
    <tr>
        <th>Job Title</th>
        <td><?php echo $row['title'];?></td>
    </tr>
      <tr>
        <th>Job Posted Date</th>
        <td><?php echo $row['date'];?></td>
    </tr>
     <tr>
        <th>Job Category</th>
        <td><?php echo $row['category'];?></td>
    </tr>
      <tr>
        <th>Job Salary</th>
        <td><?php echo $row['salary'];?></td>
    </tr>
      <tr>
        <th>Job Description</th>
        <td><?php echo $row['description'];?></td>
    </tr>
    <tr>
        <th>Company Name</th>
        <td><?php echo $row['company_name'];?></td>
    </tr>
   <tr>
        <th>Address</th>
        <td><?php echo $row['city']." ".$row['address']." ".$row['street'];?></td>
    </tr>
    <tr>
        <th>Telephone</th>
        <td><?php echo $row['telephone'];?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $row['email'];?></td>
    </tr>
  
</table>
             
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

<?php require 'footer.php'; ?>