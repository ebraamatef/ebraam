<?php
 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $firstnumber = $_POST['first_number'];
    $secondNumber = $_POST['second_number'];
    $operator=$_POST["operator"];
    switch ($operator) {
        case "Sum":
        $result = $firstnumber + $secondNumber;
        break;
        case "Subtraction":
         $result = $firstnumber - $secondNumber;
        break;
        case "Multiplication":
        $result = $firstnumber * $secondNumber;
        break;
        case "Division":
        $result = $firstnumber / $secondNumber;
        break;
        case "Mod":
            $result = $firstnumber % $secondNumber;
            break;
        case "Power":
            $result = $firstnumber ** $secondNumber;
                break;
            }
        
            






}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Clac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
      <div class="container  px-4 text-center ">
          <form method="post">
        <h1>claculator</h1>
    <div class="mb-3 bg-primary" >
  <label for="exampleFormControlInput1" class="form-label">First Number</label>
  <input type="number" name="first_number" class="form-control" id="exampleFormControlInput1" >
</div>

<div class="mb-3 bg-primary" >
  <label for="exampleFormControlInput1" class="form-label">Second Number</label>
  <input type="number" name="second_number" class="form-control" id="exampleFormControlInput1" >
</div>
<div>
<input class="btn btn-primary" type="submit" name="operator" value="Sum" />
<input class="btn btn-primary" type="submit" name="operator" value="Subtraction" />
<input class="btn btn-primary" type="submit" name="operator" value="Multiplication" />
<input class="btn btn-primary" type="submit" name="operator" value="Division" />
<input class="btn btn-primary" type="submit" name="operator" value="Mod" />
<input class="btn btn-primary" type="submit" name="operator" value="Power" />
</div>

    </form>
    <div class="bg-danger">
        
        <h2> <?php if(isset($result)) echo $result; ?></h2> 
     </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
