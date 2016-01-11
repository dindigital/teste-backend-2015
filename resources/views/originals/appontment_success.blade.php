<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Medical & health landing page templates for online appointment that help you to medical service & patient visit">
<meta name="author" content="">
<title>Wealth.life | Medical Landing Page Template</title>
<!-- Bootstrap Core CSS -->
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('css/style.css') !!}
{!! Html::style('css/font-awesome.css') !!}
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- your favicon icon link -->
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />

<!-- Custom CSS -->

</head>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div class="container">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#page-top">
        <h1 class="logo-brand">WEALTH.<span class="logo">LIFE</span></h1>
        </a> </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li class=""> <a href="index.html#about">APPOINMENT</a> </li>
          <li class=""> <a href="index.html#services">FEATURE</a> </li>
          <li class=""> <a href="index.html#doctor">DOCTOR</a> </li>
          <li class=""> <a href="index.html#contact">CONTACT US</a> </li>
          <li class="page-scroll social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a> <a href="#"><i class="fa fa-flickr fa-size"> </i> </a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</div>
<!-- intro close -->
<section id="about" class="about-section"><!-- about start -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Formulário encaminhado com sucesso</h1>
        <p class="lead"> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Various versions have evolved over the years, sometimes on purpose </p>      
      </div>
    </div>
  </div>
</section>
<!-- about close -->
<!-- service close -->
<div class="footer"><!-- footer section start -->
  <div class="container">
    <div class="row ft">
      <div class="col-md-9">
        <p> © Copyright 2014. All Rights Reserved by Wealth.life </p>
      </div>
      <div class="col-md-3"><p> <a href="#"> <i class="fa fa-facebook-square fa-size social-icon"> </i></a>
      <a href="#"> <i class="fa  fa-twitter-square  fa-size social-icon"> </i> </a>
      <a href="#"><i class="fa fa-google-plus-square fa-size social-icon"> </i></a> 
      <a href="#"><i class="fa fa-flickr fa-size social-icon"> </i></a> 
      <a href="#"><i class="fa fa-pinterest-square fa-size social-icon"> </i> </a></p></div>
    </div>
  </div>
</div><!-- footer section close -->

<!-- Core JavaScript Files --> 
{!! Html::script('js/jquery-1.10.2.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.easing.min.js') !!}
<!-- Custom Theme JavaScript --> 
{!! Html::script('js/scrolling-nav.js') !!}
{!! Html::script('js/owl.carousel.js') !!}

<script>
  $("#owl-demo").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 4,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
  });
</script>

</body>
</html>
