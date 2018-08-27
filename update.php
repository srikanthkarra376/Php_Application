<?php 

include("db_connection.php");
 
// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $title= $_POST['title'];
    $description = $_POST['description'];
 
 
    // Updaste User details
    $query = "UPDATE news SET news_title= '$title',news_descrption='$description' WHERE id = '$id'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($con));
    }
}
?>