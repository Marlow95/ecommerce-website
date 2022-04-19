<?php include_once('reusables/header.php');?>
<?php include_once('reusables/navbar.php');?>
<?php # ALL POST INPUTS ARE FILTERED IN HEADERS.PHP ?>
<div class="jumbotron jumbotron-fluid text-center m-4 bg-success text-white">
    <div class="container p-4">
        <h1 class=" display-4">
            <?php echo isset($_SESSION['firstname']) ? $_SESSION['firstname'] :'Hello, Guest';?>
        </h1>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-secondary btn-lg" href="#" role="button">Shop</a>
        <a class="btn btn-outline-light btn-lg" href="#" role="button">Give As A Gift</a>
    </div>
</div>


<h2 class="m-4">Featured</h2>
<div class="row">
    <div class="card-fluid m-4" style="width: 18rem;">
        <img class="card-img-top" src="https://placehold.co/286x180" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-success">Add to Cart</a>
        </div>
    </div>
</div>

<h1>Our Amazing Health Concious Process</h1>

<div class="infographic row justify-content-center">
    <div class="w-75 bg-secondary row">
        <p class="pl-4 pt-4 pb-4 text-white col-6">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </br>
         Proin fermentum leo eget lectus suscipit mollis. 
        </p>
        <img class="col-6" src="https://unsplash.com/photos/Y3AqmbmtLQI" alt="coffe-process-1">
    </div>
</div>

<?php include_once('reusables/footer.php');?>