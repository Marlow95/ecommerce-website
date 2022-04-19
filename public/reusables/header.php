<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Envy Coffee</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<!--Bootsrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="./public/css/styles.css">
<body>
<?php require_once('../App/Config.php'); ?>
<?php $filter_all_post_inputs = filter_input_array(INPUT_POST); ?>
<?php

$routes = array(
    'home' => 'index.php',
    'our_story' => 'our_story.php',
    'shop' => 'shop.php',
    'login' => 'login.php',
    'contact_us' => 'contact_us.php',
    'checkout' => 'checkout.php'
);