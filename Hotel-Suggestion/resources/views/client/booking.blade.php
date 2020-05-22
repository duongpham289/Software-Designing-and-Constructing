
@extends('client.layouts.web', ['title' => 'Booking'])

@section('css')

<link rel="stylesheet" type="text/css" href="/assets/client/styles/bootstrap4/bootstrap.min.css">
<link href="/assets/client/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/assets/client/styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/client/styles/offers_responsive.css">

@endsection

@section('content')
<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="/assets/client/images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Booking</div>
		</div>
    </div>
<!-- Booking -->
<div class="section-top-border">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            @if ($errors->any())
                            @component('admin.layouts.components.alert')
                            @slot('type', 'danger')
                            @slot('stroke', 'cancel')
                            {{ $errors->first() }}
                            @endcomponent
                            @endif
            <h3 class="mb-30">Booking Information</h3>
            <form action="/booking",@method(POST)>
                <div class="mt-10">
                    <input type="text" name="first_name" placeholder="First Name"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                        class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="last_name" placeholder="Last Name"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                        class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="last_name" placeholder="Last Name"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                        class="single-input">
                </div>
                <div class="mt-10">
                    <input type="email" name="EMAIL" placeholder="Email address"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                        class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                    <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Address'" required class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select">
                                <select>
                                    <option value=" 1">City</option>
                        <option value="1">Dhaka</option>
                        <option value="1">Dilli</option>
                        <option value="1">Newyork</option>
                        <option value="1">Islamabad</option>
                        </select>
                    </div>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select">
                                <select>
                                    <option value=" 1">Country</option>
                        <option value="1">Bangladesh</option>
                        <option value="1">India</option>
                        <option value="1">England</option>
                        <option value="1">Srilanka</option>
                        </select>
                    </div>
                </div>

                <div class="mt-10">
                    <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Message'" required></textarea>
                </div>
                <script src="/assets/client/js/jquery-3.2.1.min.js"></script>
                <script src="/assets/client/styles/bootstrap4/popper.js"></script>
                <script src="/assets/client/styles/bootstrap4/bootstrap.min.js"></script>
                <script src="/assets/client/plugins/Isotope/isotope.pkgd.min.js"></script>
                <script src="/assets/client/plugins/easing/easing.js"></script>
                <script src="/assets/client/plugins/parallax-js-master/parallax.min.js"></script>
                <script src="/assets/client/js/offers_custom.js"></script>

                @endsection
