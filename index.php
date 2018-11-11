<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Music - Experince the Real Music</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.botstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
</head>
<body>



<!--
<form action="#">
                    <input style='width:80%;border-radius:0.4em;border:1px solid #bbb;height:30px;text-align:center;font-family:sans-serif;' type="text" id="search" placeholder="Type something..." autocomplete="off" class="form-control"  />
                    <br><br>
                    <input style='border:none;padding:10px;border-radius:0.4em;background-color:blue;color:#fff;' type="submit" value="Search" id="butt" class="form-control btn btn-primary w100">
                </form>


                 <div id="results"></div>

-->

 <nav>
    <div class="nav-wrapper light-blue darken-4">
      <a style="padding-left:30px;" href="#!" class="brand-logo"><i style="font-size:1.2em;" class="large material-icons #fff">music_video</i>Music</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons">search</i></a></li>
        <li><a href="#"><i class="material-icons">view_module</i></a></li>
        <li><a href="#"><i class="material-icons">refresh</i></a></li>
        <li><a href="#"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
<div class="container">
<h4>Search for Music Online</h4>
<nav>
    
    <div class="nav-wrapper pink">
      <form>
        <div class="input-field">
          <input id="search" class="form-control" type="search">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons #333">close</i>
          <button id="butt" class="btn waves-effect blue form-control">Search</button>
        </div>
      </form>
    </div>
  </nav>
<br><br>
<br>
<br>
<div id="results">   </div>


         
</body>
</html>

        <!-- scripts -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="js/app.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=init"></script>
        <script type="text/javascript">
           $(function(){
               $('#butt').click();
           })
        </script>




