<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
  <head>
    <title>Check My Firmware</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel PHP Ajax Country State City Dropdown List - Tutsmake.COM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main_check.css">
    
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
        <div class="col-md-3"><select class="custom-select my-1 mr-sm-2" id="brand">
          <option value="">Select Brand</option>
          @foreach($brands as $key => $brand)
         <option value="{{$key}}"> {{$brand}}</option>
         @endforeach
          </select></div>
        <div class="col-md-3"></div>
      </div>
      <div class="row mb-5">
        <div class="col-md-3"><p>Model :</p></div>
        <div class="col-md-3"><select class="custom-select my-1 mr-sm-2" id="model">
          </select></div>
      </div>
      <div class="row mb-5">
        <div class="col-md-3"><p>Version :</p></div>
        <div class="col-md-3"><select class="custom-select my-1 mr-sm-2" id="version">
          </select></div>
      </div>
      
      <div class="row mb-5">
        <div class="col-md-3"><p>Upload :</p></div>
        <div class="col-md-3">
          <input type="file" name="file">
        </div>

        <div class="col-md-4">
          <input class="btn btn-success" type="submit" value="Submit">
        </div>
      </div>
    </section>
    <script type=text/javascript>
  $('#brand').change(function(){
  var brandID = $(this).val();  
  if(brandID){
    $.ajax({
      type:"GET",
      url:"{{url('get-model-list')}}?brand_id="+brandID,
      success:function(res){        
      if(res){
        $("#model").empty();
        $("#model").append('<option>Select</option>');
        $.each(res,function(key,value){
          $("#model").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#model").empty();
      }
      }
    });
  }else{
    $("#model").empty();
    $("#version").empty();
  }   
  });
  $('#model').on('change',function(){
  var modelID = $(this).val();  
  if(modelID){
    $.ajax({
      type:"GET",
      url:"{{url('get-version-list')}}?model_id="+modelID,
      success:function(res){        
      if(res){
        $("#version").empty();
        $.each(res,function(key,value){
          $("#version").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#version").empty();
      }
      }
    });
  }else{
    $("#version").empty();
  }
    
  });
</script>
</body>

</html>
