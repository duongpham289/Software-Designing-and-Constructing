

@section('css')

<link rel="stylesheet" type="text/css" href="/assets/client/styles/bootstrap4/bootstrap.min.css">
<link href="/assets/client/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/assets/client/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/client/styles/contact_responsive.css">

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


                            <div class="contact_form_section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">

                                            <!-- Booking Form -->

                                            <div class="contact_form_container">
                                                <div class="contact_title text-center">Your information</div>
                                                <form action="#" id="contact_form" class="contact_form text-center" method="POST">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label>Account</label>
                                                    <input type="text" name="account_id" class="form-control" value="">
                                                        <input type="hidden" name="room_id" class="form-control" value="{{ $room->id }}">
                                                    </div>

                                                    <input type="text" id="contact_form_name" class="contact_form_name input_field" name="name" placeholder="name" required="required" data-error="Name is required.">
                                                    {{-- <input type="text" id="contact_form_email" class="contact_form_email input_field" name="e_mail" placeholder="e-mail" required="required" data-error="Email is required."> --}}
                                                    <input type="text" id="contact_form_phone" class="contact_form_name input_field" name="phone" placeholder="phone" required="required" data-error="Phone number is required.">
                                                    <input type="text" id="contact_form_nationality" class="contact_form_name input_field" name="nationality" placeholder="nationality" required="required" data-error="Phone number is required.">
                                                    <textarea id="contact_form_message" class="text_field contact_form_message" name="address" rows="4" placeholder="Address" required="required" data-error="Address is required."></textarea>
                                                    <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Book<span></span><span></span><span></span></button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                <script src="/assets/client/js/jquery-3.2.1.min.js"></script>
                <script src="/assets/client/styles/bootstrap4/popper.js"></script>
                <script src="/assets/client/styles/bootstrap4/bootstrap.min.js"></script>
                <script src="/assets/client/plugins/Isotope/isotope.pkgd.min.js"></script>
                <script src="/assets/client/plugins/easing/easing.js"></script>
                <script src="/assets/client/plugins/parallax-js-master/parallax.min.js"></script>
                <script src="/assets/client/js/contact_custom.js"></script>

                @endsection
