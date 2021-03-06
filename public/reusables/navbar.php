<?php require_once('header.php'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" 
  aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand mx-2" href="#">Envy Coffee</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $routes['home'];?>">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $routes['our_story'];?>">Our Story</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $routes['shop'];?>">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $routes['login'];?>">Login/Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $routes['contact_us'];?>">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $routes['checkout'];?>"><i class="fa fa-shopping-cart text-white" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled" href="#"></a>
      </li>
    </ul>
    <?php
      $search = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';

    ?>
    <form class="form-inline my-2 my-lg-0 mr-4" method="get">
      <input class="form-inline-control form-control-lg mr-sm-2" type="search" name="search" 
      placeholder="Search" aria-label="Search" value="<?php $search; ?>">
      <button class="btn-lg btn-success my-2 my-sm-0" type="submit">Search</button>
      <?php // This is for checking outputs ?>
     <h2 class="text-white"><?php echo $search; ?></h2>
    </form>
  </div>
</nav>
<?php 



