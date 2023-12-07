<?php
//the post is used for making it a requirement
if(isset($_POST["status"])) {
    require 'DATABASE.php';
    extract($_POST);


    $sql = "INSERT INTO `crude`(`taskid`, `taskname`, `datetodo`, `status`) VALUES 
                               (NULL ,'$taskname','$datetodo','$status')";
    mysqli_query($conn, $sql);


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enterdata</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-sm-6">

            <div class="card">

                <div class="card-header">
                    Tasks for the day
                </div>
                <div class="card_body">
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="taskname">Task name</label>
                            <input type="text" class="form-control" name="taskname" id="taskanme">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="datetodo">date todo</label>
                            <input type="date" class="form-control" name="datetodo" id="datetodo">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text"class="form-control" name="status" id="status">

                        </div>

                        <button class="btn btn-info btn-block">ENTER DATA</button>

                    </form>
                </div>
            </div>

        </div>

    </div>

</div>

</div>
</body>
</html>