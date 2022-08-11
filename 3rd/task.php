<?php
// print($_SERVER['REQUEST_METHOD']); 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    //  print($_POST['number']);
     $number=$_POST['number'];
     $root=$_POST['root'];
$result=$number**(1/$root);

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Spaecific Root</h1>
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number</label>
    <input type="Number" name="number" class="form-control" id="Number" aria-describedby="Number">
    <div id="Number" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="Number" class="form-label">Root</label>
    <input type="Number" name="root" class="form-control" id="Number">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h3>Result </h3>
<?php   if(isset($result)) echo $result; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
