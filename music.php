<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $id="Not Available at the Moment";
}
if(isset($_GET['title'])){
    $title = $_GET['title'];
}
else{
    $title="Not Available at the Moment";
}
if(isset($_GET['channel'])){
    $channel = $_GET['channel'];
}
else{
    $channel="Not Available at the Moment";
}
if(isset($_GET['des'])){
    $des = $_GET['des'];
}
else{
    $des="Not Available at the Moment";
}
if(isset($_GET['date'])){
    $date = $_GET['date'];
}
else{
    $date="Not Available at the Moment";
}

?>
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/mediaelement/latest/mediaelementplayer.css">
</head>
<body>


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

  

    <section class="container">
      
    <div class="row">
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                    <div class="row">
                            <div class="col s12 m12">
                              <div class="card red small">
                                <div class="card-content white-text">
                                  <div class="card-title"><?php echo $title; ?></div>
                                  
                                  <span id="pro">Streaming the Media <div class="progress">
                                      
                                      <div class="indeterminate"></div>
                                 </div> </span>
                                 
                                 <audio id="player2" controls>
                                    <source src="https://www.youtube.com/watch?v=<?php echo $id; ?>" type="video/x-youtube">
                                </audio>
                                
                                </div>
                                <div class="card-action white-text">
                                  
                                  <a style="color:#fff;" href="#" class="btn waves-effect pink waves-light">PLAY VIDEO</a>
                                  <a style="color:#fff;" href="#" class="btn waves-effect pink waves-light">DOWNLOAD</a>
                                </div>
                              </div>
                            </div>
                          </div>         
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <div class="card small">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator img-responsive" style="width:100%;" src="https://img.youtube.com/vi/<?php echo $id; ?>/mqdefault.jpg">
                            </div>
                            <div style="padding-bottom:10px;" class="card-content">
                              <span class="card-title activator grey-text text-darken-4" style="font-size:1em;"><?php echo $title; ?><i class="material-icons right">more_vert</i></span>
                              <p><a href="#">Channel : <?php echo $channel; ?></a></p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4"><?php echo $title; ?><i class="material-icons right">close</i></span>
                              <p><?php echo $des; ?></p>
                            </div>
                          </div>
            </div>
           
        </div>         
     
    </section>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/mediaelement/latest/mediaelement-and-player.min.js"></script>
    <script>$('audio').mediaelementplayer();</script>
    <script>
      
    </script>

</body>
</html>




