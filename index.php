<?php
require 'class.Laptop.php';
require 'class.LaptopList.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LaptopShop</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Soufyane Kaddouri</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://www.skaddouri.tk">Portfolio</a> </li>
                    <li><a href="#">More Projects</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                            <form method="post">
                                <input type="text" placeholder="Minimal Price" name="minimalstring">
                                <input type="text" placeholder="Maximal Price" name="maximalstring">
                                <input type="submit" name="submit" value="Search"><br> <br>

                                <select name="laptopchoice">
                                    <option value="all">All Laptops</option>
                                    <option value="hp">HP</option>
                                    <option value="asus">Asus</option>
                                    <option value="lenovo">Lenovo</option>
                                </select>

                            </form>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4 inlinespecial">
                       <?php
                       $minPrice  = 0;
                       $maxPrice = 1000000000;

                       if ($_POST['minimalstring'] != null ) {
                           $minPrice = $_POST['minimalstring'];
                       }
                       
                       if ($_POST['maximalstring'] != null) {
                           $maxPrice = $_POST['maximalstring'];
                       }

                       if (isset($_POST['submit']) || isset($_POST['submit']) == null) {
                           foreach ($lijst as $laptop) {
                               echo '<div class="thumbnail size-fix"> ';
                               echo '<img class= "laptop-pic" src=" '. $laptop->getPath() .  ' ">';
                               echo  '<div class="caption">';
                               echo '<h4><a href="#">'.  $laptop->getName()  ." "   .   $laptop->getType()      .        '</a>';
                               echo '<br> <br> <br>';
                               echo '<h4 class="pull-right">€'.  $laptop->getPrice() .'</h4>';
                               echo '</div>';
                               echo '</div>';
                           }
                       }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr><footer><div class="row"><div class="col-lg-12"><a href="https://nl.linkedin.com/in/skaddouri" target="_blank">Developped by Soufyane Kaddouri</a></div></div></footer>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
