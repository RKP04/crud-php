<?php 

require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student view Details
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php 
                    if(isset($_GET['id']))
                    {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM students WHERE id='$student_id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $student = mysqli_fetch_array($query_run); // Fetch into $student
                            ?>
                         

                                
                                <div class="mb-3">
                                    <label>Student Name</label>
                                 
                                    <p class="form-control">
                                        <?= $student['name'];?>

                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label>Student Email</label>
                                   <p class="form-control">
                                        <?= $student['email'];?>

                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label>Student Phone</label>
                                    <p class="form-control">
                                        <?= $student['phone'];?>

                                    </p>
                               </div>

                                <div class="mb-3">
                                    <label>Student Course</label>
                                    <p class="form-control">
                                        <?= $student['course'];?>

                                    </p>

                                </div>

                              
                    
                            <?php
                        }
                        else
                        {
                            echo "<h4>No Such Id Found</h4>";
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
