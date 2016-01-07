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

{!! Html::script('js/jquery.mask.min.js') !!}


<script>
  $("#owl-demo").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 4,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
  });

  $("#telefone").mask("(00) 0000-00009");

</script>