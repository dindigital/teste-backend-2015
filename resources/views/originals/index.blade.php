<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Medical & health landing page templates for online appointment that help you to medical service & patient visit">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
          <li class="page-scroll"> <a href="#about">APPOINMENT</a> </li>
          <li class="page-scroll"> <a href="#services">FEATURE</a> </li>
          <li class="page-scroll"> <a href="#doctor">DOCTOR</a> </li>
          <li class="page-scroll"> <a href="#contact">CONTACT US</a> </li>
          <li class="page-scroll social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a> <a href="#"><i class="fa fa-flickr fa-size"> </i> </a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</div>
<section id="intro" class="intro-section"><!-- intro start -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 intro-caption">
        <h1 class="intro-title">Expert health advice <br>
          for <span>wealth life</span> </h1>
        <p>Nullam id commodo augueat cursus arcu tempaus acnteger porta massa sed lectus auctorsit amet suscipit tortor hendreriusce laoreet dui eu.</p>
        <div class="page-scroll"> <a class="btn btn-default btn-orange" href="#about">MAKE AN APPOINTMENT</a> </div>
        <br>
        <p> OR </p>
        <h1 class="call-num"> 1-800-643-4500 </h1>
      </div>
      <div class="col-md-7"> <img src="image/pic-1.png" class="img-responsive" alt="doctor"> </div>
    </div>
  </div>
</section>
<!-- intro close -->
<section id="about" class="about-section"><!-- about start -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>We offer a no obligation a free initial consultation</h1>
        <p class="lead"> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Various versions have evolved over the years, sometimes on purpose </p>
        <div class="row block">
          <div class="col-md-6">
            <h3>Cardio Monitoring</h3>
            <p>Nullam mo  arcu ac molestie scelerisqu vulputate molestie mpus ipsum.</p>
          </div>
          <div class="col-md-6">
            <h3>Medical Treatment</h3>
            <p>Various versions have evolved over the years, sometimes by accident .</p>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
            <h3>Qualified Doctors</h3>
            <p>Nullam mo  arcu ac molestie scelerisqu vulputate molestie mpus ipsum.</p>
          </div>
          <div class="col-md-6">
            <h3>Emergency Help</h3>
            <p><strong>1-800-700-6200 - </strong> Plestie scelerisqu vulputate molestie ligula gravida .</p>
          </div>
      </div>
      </div>
      
      
      <div class="col-md-offset-1 col-md-4">
        <div class="appoinment-form">
                <h3> Make an appointment today </h3>
                {!! Form::open(array('action' => 'FormularioController@store')) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('Name', 'Name:') !!}
                    {!! Form::text('nome',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('E-mail', 'E-mail:') !!}
                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Phone', 'Phone:') !!}
                    {!! Form::text('telefone',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about close -->
<section id="services" class="services-section"><!-- service start -->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 block-title">
        <h1> Awesome landing page for Medical and Health</h1>
        <p>wealth.life was created to offer a perfect solution for medical  landing page.</p>
      </div>
    </div>
    <div class="row">
    	<div class="col-md-6  block">
        <div class="row">
      <div class="col-md-4 box-icon"> <i class="fa fa-building-o fa-4x"> </i> </div>
      <div class="col-md-8 box-ct">
        <h3> Great Infrastructure </h3>
        <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p></div>
      </div>
      </div>
      <div class="col-md-6 block">
        <div class="row">
      <div class="col-md-4 box-icon"> <i class="fa fa-heart fa-4x"> </i> </div>
      <div class="col-md-8 box-ct">
        <h3> No Extra Fees </h3>
        <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> </div>
      </div>
      </div>
      </div>
      <div class="row">
    	<div class="col-md-6 block">
        <div class="row">
      <div class="col-md-4 box-icon"> <i class="fa  fa-user-md  fa-4x"> </i> </div>
      <div class="col-md-8 box-ct">
        <h3> Health care solutions </h3>
        <p> Donec vitae enim nec augue eleifend tempor eget non ligula. </p> </div>
      </div>
      </div>
      <div class="col-md-6 block">
        <div class="row">
      <div class="col-md-4 box-icon"> <i class="fa fa-ambulance fa-4x"> </i> </div>
      <div class="col-md-8 box-ct">
        <h3> 24/7 Ambulance Services </h3>
        <p> <strong>1-800-700-6200 -</strong> Plestie scelerisqu vulputate, molestie ligula gravida,  </p> </div>
      </div>
      </div>
      </div>
  </div>
</section>
<!-- service close -->
<section id="doctor" class="doctor-section"><!-- doctor section start -->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 block-title">
        <h1>Meet the Wealth.life Specialists Doctors </h1>
        <p> Lorem ipsum dolor sit amet consectetur adipiscing elit uisquein.</p>
      </div>
    </div>
    <div class="row">
      @foreach ($medicos as $medico)
        <div class="col-md-4 doctor-profile"> 
          <div class="bg-profile"> 
            <a href="/doctor/{{$medico->id}}" ><img src="image/{{ $medico->foto}}" alt=""> </a>
          </div>
          <h3> {{ $medico->nome}} </h3>
          <strong>{{ $medico->especialidade}}     |      {{ $medico->celular}} </strong>
          <p> {{ $medico->descricao}} </p>
          <div class="social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa fa-linkedin-square fa-size"> </i> </a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> </div>
        </div>
      @endforeach
      
    </div>
  </div>
  <div class="testimonials"><!-- Testimonials start -->
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 block-title">
          <h1> What Customers are Saying about wealth.life </h1>
          <p> Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"> <img src="image/men.jpg" class="img-circle client-circle" alt="pic-4"> </div>
        <div class="col-md-4">
          <p> “As a caretaker, I was unfamiliar with how Medicare works. The agent I spoke with helped me determine which plan would be best.” </p>
          <span> - Brandon Feil <a href="#"> ( Patient ) </a> </span>
        </div>
        <div class="col-md-2"> <img src="image/grl.jpg" class="img-circle client-circle" alt="pic-4"> </div>
        <div class="col-md-4">
          <p> “As a caretaker, I was unfamiliar with how Medicare works. The agent I spoke with helped me determine which plan would be best.”</p>
          <span> - Kiley Ellis <a href="#"> ( Patient ) </a> </span>
        </div>
      </div>
    </div>
  </div><!-- Testimonials close -->
  <div class="container client"><!-- Client start -->
    <div class="row text-center">
      <div class="col-md-offset-2 col-md-8">
        <h1> We trusted by thousand of client </h1>
        <p> Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
      </div>
    </div>
    <div class="row">
      <div id="owl-demo" class="client-logo">
        <div class="item col-md-3"><img src="image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-2.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-2.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-2.png" alt="client logo"></div>
      </div>
    </div>
  </div><!-- Client close -->
</section><!-- doctor section close -->
<section id="contact" class="contact-section"><!-- contact section start -->
  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
          <h1> We offer a no obligation a free initial consultation </h1>
          <p> Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus mattistortor felis euismod nisl. </p>
          <div class="page-scroll"><a href="#about" class="btn btn-default btn-orange"> MAKE AN APPOINTMENT</a></div>
        </div>
      </div>
    </div>
    <div class="container ct-block text-center">
      <div class="row">
        <div class="col-md-4 green-icon"> <i class="fa fa-ambulance fa-4x"> </i>
          <h3> Fast Consultation &amp; Service </h3>
          <p> Lorem ipsum doloonsectetur adipiscing elit uisttistortor felis euismod nisl. </p>
        </div>
        <div class="col-md-4 green-icon"> <i class="fa fa-headphones fa-4x"> </i>
          <h3> Fast Consultation &amp; Service </h3>
          <p> Nulla rutrum nibh eu libero vestibulum, suscipit posuere ipsum cursus. </p>
        </div>
        <div class="col-md-4 green-icon"> <i class="fa fa-comments fa-4x"> </i>
          <h3> Fast Consultation  &amp; Service </h3>
          <p> Quisque sit amet augue tincidunt, volutpat nulla in, dapibus diam volutpat nulla in. </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ct-info">
        <div class="col-md-4">
          <h3> 1-800-643-4500 </h3>
        </div>
        <div class="col-md-8">
          <h3> Opening Hours : Monday to Saturday - 8am to 9pm </h3>
        </div>
      </div>
    </div>
  </div>

</section><!-- contact section close -->
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

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</body>
</html>
