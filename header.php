<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?sensor=false">
  </script>
  <script type="text/javascript">
    function initialize() {
      var myLatlng = new google.maps.LatLng(56.463392,10.044704);
      var mapOptions = {
        center: myLatlng,
        zoom: 15,
        disableDefaultUI: true
      };

      var map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

      var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        animation: google.maps.Animation.DROP,
        title: 'Caspersen & Krogh Arkitekter'
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

</head>
<body>
  <!-- NAVIGATION -->
  <div class="navbar navbar-inverse navbar-fixed-top" id="main-menu" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav nav-justified">
          <li><a href="index.php">Hjem</a></li>
          <li><a href="tegnestuen.php">Tegnestuen</a></li>
          <li><a href="byggerier.php">Byggerier</a></li>
          <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
      </div>
    </div> <!-- CONTAINER END -->
  </div> <!-- NAVBAR END -->
