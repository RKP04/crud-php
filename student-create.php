<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<?php include('message.php');

?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Add
                        <a href = "index.php" class="btn btn-danger float-end">BACK</a>
</h4>
</div>
<div class="card-body">
<form action="code.php" method="POST">
   <div class="mb-3">
    <label>Student Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
    <label>Student Email</label>
<input type="text" name="email" class="form-control">
</div>

<div class="mb-3">
    <label>Student Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="mb-3">
    <label>Student Course</label>
<input type="text" name="course" class="form-control">
</div>

<div class="mb-3">
    <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
</div>
</form>

</div>
</div>
</div>
    </div>
</div>
</body>
</html> 

