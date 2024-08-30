<?php 

session_start();
require 'dbcon.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
<div class="container mt-4">

<?php include('message.php'); ?>

<div class="row">
  
<div class="card-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Student Details
                <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
            </h4>
</div>
<div class="card-body">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php 
$query = "SELECT * FROM students";
$query_run = mysqli_query($con, $query);

if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $student)
{
    // echo $student['name'];
    ?>
    
    <tr>
       <td><?= $student['id']; ?></td>
       <td><?= $student['name']; ?></td>
       <td><?= $student['email']; ?></td>
       <td><?= $student['phone']; ?></td>
       <td><?= $student['course']; ?></td>
       <td>

       <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
        <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
  

        <form action="code.php" method="POST" class="d-inline">
        <button type="submit" name="delete_student" value="<?=$student['id'];?>"  class="btn btn-danger btn-sm">Delete</button>
        </form>
       
       </td>
    </tr>

    <?php
}
}

else
{
   echo"<h5>No Record Found </h5>"; 
}
?>
        <!-- </tbody>
            <tr>
                <td>1</td>
            </tr> -->
        </tbody>
    </table>
</div>
</div>

</div>
</div>
</div>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>