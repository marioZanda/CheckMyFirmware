<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
  <head>
    <title>Check My Firmware</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="img/favicon.jpeg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/enc-base64-min.js"></script>
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
    <section class="container ml-0 mt-3 tableau">
      <div class="row">
        <div class="col-md-6">
          <div class="row mb-4">
              <div class="col-md-6"><p>Brand : </p></div>
              <div class="col-md-6">
                <select class="custom-select my-1 mr-sm-2" id="brand">
                  <option value="">Select Brand</option>
                  @foreach($brands as $key => $brand)
                    <option value="{{$key}}"> {{$brand}}</option>
                  @endforeach
                </select>
              </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6"><p>Model :</p></div>
            <div class="col-md-6">
              <select class="custom-select my-1 mr-sm-2" id="model">
              </select>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6"><p>Version :</p></div>
            <div class="col-md-6">
              <select class="custom-select my-1 mr-sm-2" id="version">
              </select>
            </div>
          </div>  
          <div class="row mb-4">
            <div class="col-md-6"><p>Via path :</p></div>
            <div class="col-md-6">
              <input type="file" name="file" id="up_file">
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6">
              <input class="btn btn-success" style="float: right;" type="submit" value="Submit" id="upload">
            </div>
            <div class="col md-6"><p class="text-left" id="progress"></div>
          </div>
        </div>
        <div class="col-md-6 hidable">
          <div class="row mb-4">
            <div class="col-md-6"><p>Firmware integrity : </p></div>
            <div class="col-md-6"><p class="text-left" id="answer"></p></div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6"><p>Official MD5 hash : </p></div>
            <div class="col-md-6"><p class="text-left" id="off_hash"></p></div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6"><p>Your file MD5 hash : </p></div>
            <div class="col-md-6"><p class="text-left" id="file_hash"></p></div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6"><p>Official file link : </p></div>
            <div class="col-md-6"><p class="text-left"><a id="link"></a></p></div>
          </div>
        </div>
      </div>
    </section>
    <script type=text/javascript>
    $(document).ready(function(){
    $(".hidable").hide();
    $("#upload").prop('disabled', !0);
    
    });
  $('#brand').change(function(){
  var brandID = $(this).val();  
  if(brandID){
    $.ajax({
      type:"GET",
      url:"{{url('get-model-list')}}?brand_id="+brandID,
      success:function(res){        
      if(res){
        $("#model").empty();
        $("#model").append('<option>Select Model</option>');
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
        $("#version").append('<option>Select version</option>');
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

  $('#version').on('change',function(){
    var versionID = $(this).val();
    $.ajax({
      type:"GET",
      url:"{{url('get-version-hash')}}?version_id="+versionID,
      success:function(res){ 
        $.each(res,function(key,value){
          $("#link").text("link");
          document.getElementById("link").setAttribute("href",key);
          $("#off_hash").text(value);
          $("#answer").text("Not checked yet");
          $("#file_hash").text("No file uploaded");
          $(".hidable").show();
          $("#upload").prop('disabled', !1);
        })
    }
    });
  });

  $('#upload').click(function(){
    var file_length = document.getElementById("up_file").files.length;
    if( file_length == 0 ){
      alert("no files selected");
    } else {
      process();
    }
  });
function process() {
  getMD5(
    document.getElementById("up_file").files[0],
    prog => $("#progress").text("" + Math.floor(prog*100) + "%")
  ).then(
    res => answer(res),
    err => console.error(err)
  );
}

function answer(md5){
  $("#file_hash").text(md5);
  console.log(md5);
  if (md5 == $('#off_hash').text()){
    $('#answer').css("color","green");
    $('#answer').html("Verified &#10004;");
  } else {
    $('#answer').css("color","red");
    $('#answer').html("Bad one &#10006;");
  }
}

function readChunked(file, chunkCallback, endCallback) {
  var fileSize   = file.size;
  var chunkSize  = 4 * 1024 * 1024; // 4MB
  var offset     = 0;
  
  var reader = new FileReader();
  reader.onload = function() {
    if (reader.error) {
      endCallback(reader.error || {});
      return;
    }
    offset += reader.result.length;
    chunkCallback(reader.result, offset, fileSize); 
    if (offset >= fileSize) {
      endCallback(null);
      return;
    }
    readNext();
  };

  reader.onerror = function(err) {
    endCallback(err || {});
  };

  function readNext() {
    var fileSlice = file.slice(offset, offset + chunkSize);
    reader.readAsBinaryString(fileSlice);
  }
  readNext();
}

function getMD5(blob, cbProgress) {
  return new Promise((resolve, reject) => {
    var md5 = CryptoJS.algo.MD5.create();
    readChunked(blob, (chunk, offs, total) => {
      md5.update(CryptoJS.enc.Latin1.parse(chunk));
      if (cbProgress) {
        cbProgress(offs / total);
      }
    }, err => {
      if (err) {
        reject(err);
      } else {
        // TODO: Handle errors
        var hash = md5.finalize();
        var hashHex = hash.toString(CryptoJS.enc.Hex);
        resolve(hashHex);
      }
    });
  });
}

</script>
</body>

</html>
