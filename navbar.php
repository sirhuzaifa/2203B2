<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="show_data.php">Show-Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="insert.php">Create Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="insert_role.php">Insert Role</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="insert_user.php">Insert Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="show_role.php">Show Role</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="show_users.php">show Users</a>
        </li>
        <?php if(isset($_SESSION["name"])){ ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
        <?php } ?>
      </ul>
      <label class="d-flex">
        <?php if(isset($_SESSION["name"])){ echo  $_SESSION["name"]; }else{ echo "Not SignIn"; } ?>
        </label>
    </div>
  </div>
</nav>