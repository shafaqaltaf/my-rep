
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    
  </head>

  <body >
  <div class="container my-5">
  <form method="POST">
  <div class="form-group">
    <label for="name">user name</label>
    <input type="text" class="form-control" placeholder="Enter name"  name="username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required>
  </div>
  
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>
    </div>
  </body>
  <?php
  require_once 'config.php';
  if(isset($_POST['sub'])){
    $username=$_POST['username'];
  $password=$_POST['password'];
  $result= $con -> query("SELECT * FROM login WHERE username='$username' AND password='$password'");
              
  $row= $result -> fetch_assoc();
   
if(($row['username']==$username) && ($row['password'] ==$password))
{
    echo "<script>alert('Hello : $username !!');
     
    
    </script>";
    
}
else
{
    echo '<i style="color:red;font-size:20px;font-family:calibri;text-align:center;">
      Invalid name or password </i> ';
}
}

  ?>  

</html>
