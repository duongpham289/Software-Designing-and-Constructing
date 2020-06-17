@extends('flybleu.layouts.web',['title' => 'FlyBleu'])
@section('content')

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					{{-- <div class="form-group">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
								ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
								Perspiciatis.
							</p>
						</div>
					</div> --}}
					<div class="col-md-12">
						<div class="booking-form">
                            <form action="/flybleu/book" method="POST">
                                @csrf
                                <div class="form-group">
                                    <h5 class="" for="type_ticket"><strong>Loại vé:</strong></h5>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="type_ticket" onclick="oneway();" checked="checked" value="oneway">Một chiều
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" id="2way" name="type_ticket" onclick="twoway();" value="twoway">Khứ hồi
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br/>
								<div class="row">
                                    <div class="col-sm-6">
									<span class="form-label">Điểm khởi hành</span>
                                    {{-- <input class="form-control" type="text" placeholder="Enter a destination or hotel name"> --}}
                                    <select name="from" class="form-control">
                                        @foreach ($api as $item)
                                        <option>{{ $item->from }}</option>
                                        @endforeach

                                    </select>
                                    </div>

                                    <div class="col-sm-6">
									<span class="form-label">Nơi đến</span>
                                    {{-- <input class="form-control" type="text" placeholder="Enter a destination or hotel name"> --}}
                                    <select class="form-control" name="to">
                                        @foreach ($api as $item)
                                        <option>{{ $item->to }}</option>
                                        @endforeach

                                    </select>
                                    </div>
                                </div>
                                <br/>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Ngày đi</span>
											<input name="departure" class="form-control" type="date" required>
										</div>
                                    </div>
									<div class="col-sm-6">
										<div class="form-group" id="date_return">
										</div>
									</div>
								</div>
								{{-- <div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Ghế</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div> --}}
								<div class="form-btn">
									<button class="submit-btn">Check availability</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection


@push('js')
    <script>
        function twoway() {
            $("#span_date_return").remove();
            $("#div_date_return").remove();
            var span = document.createElement("span");
            span.innerHTML = "Ngày về:";
            span.id = "span_date_return";
            span.className = "form-label";
            document.getElementById("date_return").appendChild(span);
            var input = document.createElement("input");
            input.type = "date";
            input.name = "return";
            input.required = true;
            input.className = "form-control";
            input.id ="div_date_return";
            document.getElementById("date_return").appendChild(input);
        }
        function oneway(){
            $("#span_date_return").remove();
            $("#div_date_return").remove();
        }
    </script>
@endpush
