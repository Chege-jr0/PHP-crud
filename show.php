
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Movies</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>
<?php
require 'navbar.php';
?>

<div class="container">

    <table class="table" id="assignment">
        <thead>
        <tr>
            <th>ID</th>
            <th>Taskname</th>
            <th>Date</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Update</th>
            <th>View</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'DATABASE.php';
        $sql ="SELECT `taskid`, `taskname`, `datetodo`, `status` FROM `crude` WHERE 1";
        $results= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($results))
        {
            extract( $row);
            echo "<tr>
            <td>$taskid</td>
            <td>$taskname</td>
            <td>$datetodo</td>
            <td>$status</td>
            <td>   <a href='delete.php?id=$taskid' class='btn btn-danger'>Delete</a> </td>
            <td>   <a href='update.php?id=$taskid' class='btn btn-info'>Update</a> </td>
            <td>   <a href='view.php?id=$taskid' class='btn btn-success'>View</a> </td>
            
        </tr>";
        }


        ?>


        </tbody>

    </table>


</div>
<script>
    $(document).ready(function() {
        $('#assignment').DataTable();
    } );
</script>
</body>
</html>