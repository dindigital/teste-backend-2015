<div class="container">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header scroll-link">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/">
        <h1 class="logo-brand">WEALTH.<span class="logo">LIFE</span></h1>
        </a> </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div id="main-nav" class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="/"></a> </li>
          <li class="scroll-link" data-id='about'> <a href="#about">APPOINMENT</a> </li>
          <li class="scroll-link" data-id='services'> <a href="#services">FEATURE</a> </li>
          <li class="scroll-link" data-id='doctor'> <a  href="#doctor">DOCTOR</a> </li>
          <li class="scroll-link" data-id='contact'> <a href="#contact">CONTACT US</a> </li>
          <li class="scroll-link social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a> <a href="#"><i class="fa fa-flickr fa-size"> </i> </a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</div>


@section('script')
  <script>
  $('.scroll-link').on('click', function(event){
      event.preventDefault();
      var sectionID = $(this).attr("data-id");


      if(sectionID != undefined){
          console.log(sectionID);

          $('.navbar-nav li.active').removeClass('active');
          $(this).addClass('active'); 

          window.location.href = "/#" + sectionID;
      }
      else{
        window.location.href = "/";
      }
      

      //$('html,body').animate({scrollTop:targetOffset}, 750);
  });
</script>
@append