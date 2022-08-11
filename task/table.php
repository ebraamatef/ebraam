<?php
// dynamic table
// dynamic rows //4 
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        'phones'=>[012312312,1231513513,89746543],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[1231513513,89746543],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[],
    ],  
];
// print_r($users[0]->name) ;
foreach($users as $index=>$fild)
{
    // print_r($index) ;//0/1/1
    foreach($users[$index] as $f=>$i)
    {
        // echo $f;
        if(is_object( $users[$index]->$f)){
            foreach($users[$index]->$f as $name)
            echo ($name)."<br>" ;
            $th[]= $name;
        }elseif(is_array($users[$index]->$f)){
            
            foreach($users[$index]->$f as $name=>$val)
            echo ($val)."<br>" ;
            $th_obj[]=$val;
        }else{

            echo ($users[$index]->$f)."<br>" ;
            $th_str[]=$users[$index]->$f;
        }
        
        
    }// fild

    
}
// foreach($users[0] as $f=>$i)
//     {
//         echo $f;
//     }// fild

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
    <h1>Hello, world!</h1>
    <table class="table">
  <thead>
    <tr>
       
        <?php foreach($users[0] as $f=>$i)
         {
          ?>
<th scope="row"> <?php  echo $f; ?>  </th>

        <?php }?>
    </tr>
  </thead>
  <tbody>
  <?php foreach($th_str as $str){ ?>
    <tr> 
        
        <th scope="row"> <?php  if(is_numeric($str)) {echo $str;} ?></th>
          
          </tr>
          <?php } ?>
          <?php foreach($th_str as $str){ ?>
            <tr> 
    
        
        <th scope="col"> <?php  if(is_string($str)) {echo $str;} ?></th>
          
          </tr>
          <?php echo"\n\t"; }  ?>
  <?php foreach($th as $v){ ?>
    <tr> 
        
        <td scope="col"> <?php echo $v ?></td>
          
          </tr>
          <?php echo"\n\t"; } ?>
    <tr>
    
    </tr>
    <tr>
   
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>





