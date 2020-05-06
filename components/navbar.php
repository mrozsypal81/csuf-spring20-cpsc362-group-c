<!-- Start Navigation -->
<nav class ="navbar navbar-expand-lg navbar-dark bg-dark">
<?php if(isset($_SESSION['is_login'])){ ?>
  <a class="navbar-brand" href="index.php">Game Buddy</a>
<?php } else{ ?>
  <a class="navbar-brand" href="index.php?=notRegistered">Game Buddy</a>
<?php } ?>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarColor02" >
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item active">
        <?php if(isset($_SESSION['is_login'])){ ?>
          <a class="nav-link px-4" href="index.php">Home</a>
        <?php } else{ ?>
          <a class="nav-link px-4" href="index.php?=notLogin">Home</a>
        <?php } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4" href="game-list.php">Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4" href="developers.php">Studios</a>
        </li>
        <li class="nav-item dropdown">
        <?php if(isset($_SESSION['is_login'])){ ?>
        <a class="nav-link dropdown-toggle px-4" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION['username']?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
        <?php } else{ ?>
        <a class="nav-link px-4" href="login.php">Log in</a>
        <?php } ?>
      </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
 </nav>
  <!-- End Navigation -->
