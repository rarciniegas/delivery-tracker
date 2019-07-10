<html>
  <head>
    <link rel="icon" href="assets/images/miles+_favicon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title>Delivery Tracker</title>
  </head>
  <body>
    <div class="container">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>vehicles/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>vehicles/register">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
                </li>
        </ul>
    </div>
  </nav>