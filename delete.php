
<?php

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("db.config.php");
 
    // get user id
    $_id = $_POST['id'];
 
    // delete User
    $query = "DELETE FROM news WHERE id = '$_id'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
}
?>

<script>
function DeleteUser(id) {
  var conf = confirm("Are you sure, do you really want to delete User?");
  if (conf == true) {
      $.post("deleteUser.php", {
              id: id
          },
          function (data, status) {
              // reload Users by using readRecords();
              readRecords();
          }
      );
  }
}

</script>