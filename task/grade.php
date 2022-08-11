<?php
 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    $sum=0;
        foreach($_POST as $key=>$val)
    {
    if($val!=null)
    {
        $sum =$sum+$val;
    }

        
    }

    $result=($sum/500)*100;
    if($result<40)
    {
        $grade="Grade F";
    }
    elseif($result>=40&&$result<60)
    {
        $grade="Grade E";
    }

    elseif($result>=60&&$result<70)
    {
        $grade="Grade D";
    }

    elseif($result>=70&&$result<80)
    {
        $grade="Grade C";
    }

    elseif($result>=80&&$result<90)
    {
        $grade="Grade B";
    }

    elseif($result>=90)
    {
        $grade="Grade A";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>grade </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
      <div class="container  px-4 text-center ">
          <form method="post">
        <h1>claculate your grade</h1>
    <div class="mb-3 bg-primary" >
  <label for="exampleFormControlInput1" class="form-label">Physics Degree</label>
  <input type="number" name="physics" class="form-control" id="exampleFormControlInput1" >
</div>
<div class="mb-3 bg-primary">
  <label for="exampleFormControlInput1" class="form-label">chemistry Degree</label>
  <input type="number" name="chemistry" class="form-control" id="exampleFormControlInput1" >
</div>
<div class="mb-3 bg-primary">
  <label for="exampleFormControlInput1" class="form-label">Biology Degree</label>
  <input type="number" class="form-control" name="biology" id="exampleFormControlInput1">
</div>
<div class="mb-3 bg-primary">
  <label for="exampleFormControlInput1" class="form-label">Math Degree</label>
  <input type="number" class="form-control" name="math" id="exampleFormControlInput1" >
</div>
<div class="mb-3 bg-primary">
  <label for="exampleFormControlInput1" class="form-label">Computer Degree</label>
  <input type="number" class="form-control" name="computer" id="exampleFormControlInput1" >
</div>
<button class="btn btn-primary" type="submit" class="btn btn-link">claculate</button>
    </form>
    <div class="bg-danger">
        
        <h2> <?php if(isset($result)) echo $result."%"; ?></h2> 
     </div>
     <div class="bg-danger">
        
        <h2> <?php if(isset($grade)) echo $grade; ?></h2> 
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
