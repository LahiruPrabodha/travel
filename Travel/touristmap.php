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

</head>

<body>

    <?php
    //Including Slider
    include 'navbar.php';
    ?> 


<!-- Page Content -->
<div class="container">


        <div class="row">
                <div class="col-xs-6 col-md-4">

                    
                    <div class="row"><br><br></div>
                    <div class="list-group">
                      
                      <a href="roadmap.php" class="list-group-item ">Road Map</a>
                      <a href="touristmap.php" class="list-group-item active">Tour Map</a>

                    </div>
                    
                </div>

                <div class="ccol-xs-10 col-md-6">
                    <h2>Sri Lanka Tour Map</h2>
                    <img src="img/tour_map.png">

                </div>

                <div class="col-xs-2 col-md-2"></div>

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