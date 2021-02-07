<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">  <head>
    <title>Check My Firmware</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main_contact.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body class="big-container">
    <header class="header">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md navbar-light static-top" id="headerr">
        <div class="container-fluid" id="headerr" >
          <a class="navbar-brand navvbrand" href="index">
            <img src="img/logo.svg" id="logoo" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index">Home
                  <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="check">Check</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <div style="text-align:center">
        <h2>Contact Us</h2>
      </div>
      <div class="row">
        <div class="col">
          <form action="/action_page.php">
            <label for="fname"><p>First Name</p></label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
            <label for="lname"><p>Last Name</p></label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            <label for="lname"><p>E-mail</p></label>
            <input type="email" id="email" name="email" placeholder="Your email..">
            <label for="subject"><p>Subject</p></label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>

  </body>
  <footer></footer>
</html>