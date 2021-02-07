<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">  <head>
    <title>Check My Firmware</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/favicon.jpeg">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body class="big-container">
    <header class="header">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md navbar-light static-top" id="headerr">
        <div class="container-fluid" id="headerr" >
          <a class="navbar-brand navvbrand" href="#">
            <img src="img/logo.svg" id="logoo" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index">Home
                  <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="check">Check</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6 col-lg-6 mt-5">
          <h1 class="mt-4">Logo Nav by Start Bootstrap</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit facilis laudantium temporibus cumque quia, voluptate ratione animi quis, necessitatibus quam inventore quasi rerum voluptatem maiores obcaecati odio, totam libero provident!.</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-3"><a href="check"><button type="button" class="btn btn-success btn-lg btn-block">Start</button></a></div>
        <div class="col-md-3"><a href="contact"><button type="button" class="btn btn-outline-dark btn-lg btn-block">Contact</button></a></div>
      </div>
    </div>
    <!-- /.container -->
  </body>
  <footer></footer>
</html>