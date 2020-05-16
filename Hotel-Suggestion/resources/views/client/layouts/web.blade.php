<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/assets/client/styles/bootstrap4/bootstrap.min.css">
<link href="/assets/client/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/assets/client/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/assets/client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/assets/client/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/assets/client/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/client/styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

    @include('client.layouts.header')

	<!-- Content -->

	@yield('content')

	<!-- Footer -->

    @include('client.layouts.footer')

    <script src="/assets/client/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/client/styles/bootstrap4/popper.js"></script>
    <script src="/assets/client/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/assets/client/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/assets/client/plugins/easing/easing.js"></script>
    <script src="/assets/client/js/custom.js"></script>
</body>

</html>
