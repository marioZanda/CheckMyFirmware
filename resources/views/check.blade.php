<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
  <head>
    <title>Check My Firmware</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main_check.css">
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
              <li class="nav-item active">
                <a class="nav-link" href="check">Check</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="container mt-5 tableau">
      <div class="row mb-5 mt-5 ">
        <div class="col-md-3"><p>Brand : </p></div>
        <div class="col-md-3"><select class="custom-select my-1 mr-sm-2" id="brand-dropdown inlineFormCustomSelectPref">
          <option value="">Select Brand</option>
          @foreach ($brands as $brand)
          <option value="{{ $brand->id }}">{{ $brand->name }}</option>
          @endforeach
          </select></div>
        <div class="col-md-3"></div>
      </div>
      <div class="row mb-5">
        <div class="col-md-3"><p>Model :</p></div>
        <div class="col-md-3"><select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          </select></div>
      </div>
      <div class="row mb-5">
        <div class="col-md-3"><p>Version :</p></div>
        <div class="col-md-3"><select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          </select></div>
      </div>
      <div class="row mb-5">
        <div class="col-md-3"><p>Via URL :</p></div>
        <div class="col-md-3">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="col-md-4">
          <input class="btn btn-success" type="submit" value="Submit">
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-3"><p>Via your computer :</p></div>
        <div class="col-md-3">
          <input type="file" name="file">
        </div>

        <div class="col-md-4">
          <input class="btn btn-success" type="submit" value="Submit">
        </div>
      </div>
    </section>
  </body>
  <footer></footer>
</html>