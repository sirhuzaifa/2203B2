<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>
  <?php session_start() ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php if(isset($_SESSION["name"])){ ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="show_user.php">show user</a>
        </li>
        <?php }?>
        <?php if(!isset($_SESSION["name"])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="insert.php ">insert</a>
        </li>
        <?php }?>
        <?php if(!isset($_SESSION["name"])){ ?>
        <li class="nav-item">
          <a class="nav-link " href="login.php" >login</a>
        </li>
        <?php }?>
        <?php if(isset($_SESSION["name"])){ ?>
        <li class="nav-item">
          <a class="nav-link " href="logout.php" >logout</a>
        </li>
        <?php }?>
      </ul>
      <form class="d-flex">
      <?php if(isset($_SESSION["name"])){ echo  $_SESSION["name"]; }else{ echo "Not SignIn"; } ?>
      </form>
    </div>
  </div>
</nav>
</body>
</html>