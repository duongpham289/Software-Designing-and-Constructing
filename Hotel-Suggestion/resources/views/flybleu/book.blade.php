@extends('flybleu.layouts.web',['title' => 'FlyBleu'])
@section('content')
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="booking-form">
                        <h2>Danh sách chuyến bay</h2>
                        <div class="col-sm-12">
                            <button type="button" style="float: right;" class="btn" data-toggle="modal" data-target="#detail_flight" onclick="preview();">Xem chuyến bay đã chọn</button>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Chuyến bay</th>
                                <th>Giá</th>
                                <th>Thời gian</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- @foreach($flight_departure as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        @if(!empty($airport))
                                            @foreach($airport as $air)
                                                @if($value->id_start_airport == $air->id)
                                                    {{$air->name_airport}}
                                                @endif
                                            @endforeach
                                            -
                                            @foreach($airport as $air)
                                                @if($value->id_end_airport == $air->id)
                                                    {{$air->name_airport}}
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td id="{{$value->id}}_price">{{$value->price_flight}}</td>
                                    <td>{{$value->departure_date}} {{$value->departure_time}}</td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#myModal"
                                                onclick="getData1('{{$value->id}}','{{$id_luggage}}');">
                                            Chọn chuyến bay
                                        </button>
                                    </td>
                                </tr>
                            @endforeach --}}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
