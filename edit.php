<?php
include_once './includes/db.config.php';
?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$sql = mysqli_query($conn, "SELECT * FROM news WHERE id=$id");

		if (count($sql) == 1 ) {
			$n = mysqli_fetch_array($record);
			$title = $n['name'];
			$description = $n['address'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add a news </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="main.js"></script>
</head>
<body>
<div class="container">
<h1 class=" text-info p-3">   Update a News:</h1>
<form action="update.php" method="POST" class="p-5">
<div class="form-group col-md-8">
   <label class="text-secondary" for="title"><h4>Title:</h4></label>
    <input type="text" class="form-control" name ="title" id="title"/>
 </div>
  <div class="form-group col-md-8">
    <label class="text-secondary" for="description"><h4>Description:</h4></label>
    <textarea type="text" class="form-control" name ="description" id="description"/>
     </textarea>
  </div>
  <div class="form-group col-md-8">
  <button class="btn btn-success m-3" onclick="UpdateUserDetails()" name="submit">Update</button>
 
 
  </div>
  </form>               

</div>
</body>
</html>
