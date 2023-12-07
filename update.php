<?php
//get the id
//retrieve the movie
//display details
//update the movie

//require 'security.php';

if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    require 'DATABASE.php';
    $sql="select * from crude where taskid = $id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}

if (isset($_POST["status"]))
{
    $taskname= $_REQUEST["taskname"];
    $datetodo = $_REQUEST["datetodo"];
    $status = $_POST["status"];

    $id = $_REQUEST["id"];
    require 'DATABASE.php';
    $sql ="update crude set taskname=$taskname, datetodo=$datetodo ,status=$status where taskid=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    header("location:show.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

<?php
require 'navbar.php'
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card"></div>

            <div class="card-header">
                Update
            </div>


                <?php

                if (isset ($message))
                    echo "<P class='text-danger'> $message</P>"
                ?>

                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?=$taskid?>">
                    <div class="form-group">
                        <label for="title">TASKNAME</label>
                        <input type="text" value="<?=$taskname?>" class="form-control" name="taskname" required>
                    </div>
                    <div class="form-group">
                        <label for="title">DATE TO DO</label>
                        <input type="date" value="<?=$datetodo?>" class="form-control" name="datetodo" required>
                    </div>

                    <div class="form-group">
                        <label for="title">STATUS</label>
                        <input type="text " value="<?=$status?>" class="form-control" name="status" required>


                        <button class="btn btn-info btn-block">Update</button>

                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

</body>
</html>

