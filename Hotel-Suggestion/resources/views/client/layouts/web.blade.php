<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="asset/client/styles/bootstrap4/bootstrap.min.css">
<link href="asset/client/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="asset/client/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="asset/client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="asset/client/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="asset/client/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="asset/client/styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

    @include('client.layouts.header')

	<!-- Content -->

	@yield('content')

	<!-- Footer -->

    @include('client.layouts.footer')


</body>

</html>
