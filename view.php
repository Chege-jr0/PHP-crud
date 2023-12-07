<?php

if (isset($_GET['id']))
{
    $id = $_GET["id"];
    //extract($_GET);
    require 'DATABASE.php';
    $sql ="select from crude where taskid = $id";
    mysqli_query($conn,$sql);
}
header("location:show.php");//redirect to show.php
?>