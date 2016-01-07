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

</body>
</html>