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
<h1 class=" text-info p-3"> Add a News:</h1>
<form action="sendtodb.php" method="POST" class="p-5">
<div class="form-group col-md-8">
   <label class="text-secondary" for="formGroupExampleInput"><h4>Title:</h4></label>
    <input type="text" class="form-control" name ="title" id="formGroupExampleInput">
 </div>
  <div class="form-group col-md-8">
    <label class="text-secondary" for="description"><h4>Description:</h4></label>
    <textarea type="text" class="form-control" name ="description" id="description">
     </textarea>
  </div>
  <div class="form-group col-md-8">
  <button class="btn btn-success m-3" name="submit">submit</button>
 
  <a class="btn btn-warning m-3" href="index.php">Back</a>
  </div>
  </form>               

</div>
</body>
</html>