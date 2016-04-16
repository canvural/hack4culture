<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->
<head>
  <meta name="generator" content=
  "HTML Tidy for HTML5 for Linux version 5.2.0">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content=
  "width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $el['name'] ?></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="/css/performer.css" type="text/css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                    <![endif]-->
</head>
<body>
<div class="cover-container">
		<div class="masthead clearfix">
            <div class="inner">
            <h3 class="masthead-brand"><?php echo $el['name'] ?></h3>
              <nav>
                <ul class="nav masthead-nav">
                </ul>
              </nav>
            </div>
          </div>
	  </div>

<section class="bio-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
            <h1><?php echo $el['bio'] ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="image-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img class="first-slide" src="/images/<?php echo $el['profileNameTEXT'] ?>-1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Krakow - 2014</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/images/<?php echo $el['profileNameTEXT'] ?>-2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Warszawa - 2009</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src=""/images/<?php echo $el['profileNameTEXT'] ?>-3.jpg alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Wroclaw - 2010</h1>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
			</div>
		</div>
	</div>
</section>
  <!-- jQuery -->
  <script src="/js/jquery-1.12.0.min.js"></script> 
  <script src="/js/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
