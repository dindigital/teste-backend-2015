<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

@include('includes.header')


@yield('content')


@include('includes.footer')

<!-- Core JavaScript Files --> 
{!! Html::script('js/jquery-1.10.2.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.easing.min.js') !!}
<!-- Custom Theme JavaScript --> 
{!! Html::script('js/scrolling-nav.js') !!}
{!! Html::script('js/owl.carousel.js') !!}

{!! Html::script('js/jquery.mask.min.js') !!}


@yield('script')

</body>
</html>