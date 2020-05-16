<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $title ?? 'Travelix' }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">

@yield('css')

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
