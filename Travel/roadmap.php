<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Desilva Tours </title>

    <!--<link href="//fonts.googleapis.com/css?family=Lato|Arvo|Cabin|Playfair+Display|Lora|PT+Serif|Merriweather|Oswald|Maven+Pro|Titillium+Web|Open+Sans" rel="stylesheet" type="text/css"/>
    <!-- Compiled and minified CSS -->
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">-->
  <link rel="stylesheet" href="css/card.css">

  <!-- Compiled and minified JavaScript -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>-->
  <script src="js/materialize.min.js"></script>
          

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(7.8000,80.5000),
    zoom:8,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<style type="text/css">
#googleMap{

    width:500px;
    height:700px;

};
</style>

</head>

<body>

    <?php
    //Including Slider
    include 'navbar.php';
    ?> 
<!-- Page Content -->
<div class="container">


        <div id="row">
                <div id="col-md-3"></div>

                <div id="col-md-6">
                    <div id="googleMap" ></div>

                </div>

                <div id="col-md-3"></div>

        </div><!--end row-->

</div><!--end container-->


   <hr>

        <!-- Footer -->

    <?php
    //Including Slider
    include 'footer.php';
    ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>