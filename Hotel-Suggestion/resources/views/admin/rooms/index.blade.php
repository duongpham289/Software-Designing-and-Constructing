@extends('admin.layouts.app', ['activePage' => 'rooms', 'title' => 'Danh mục'])
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/admin"><svg class="glyph valoked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh mục</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý phòng</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        {{-- <a href="/admin/rooms/create" class="btn btn-primary col-md-1" margin="90px">Tạo mới</a> --}}
                        <div class="col-md-1">
                            <a href="/admin/rooms/create" class="btn btn-primary" >Tạo mới</a>
                        </div>
                        <div class="col-md-10">
                            @include('admin.rooms.option')

                        </div>
                        {{ csrf_field() }}
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->


    </div>
    <!--/.row-->
</div>
<!--/.main-->
@endsection


@push('adminJs')
<script>

$(document).ready(function(){
    const hotelId = $('#hotels').val()
    getRoom(hotelId)
    $('#hotels').on("change", function(e){
        const hotelId = $(this).val()
        getRoom(hotelId)
    });
});

function getRoom(hotelId) {
    const _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
    $.ajax({
        url: "{{ route('show') }}",
        method:"POST", // phương thức gửi dữ liệu.
        data:{hotel_id:hotelId, _token:_token},
        success:function(data){ //dữ liệu nhận về
        $('#rooms').fadeIn();
        $('#rooms').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là rooms
        }
    });
}


    //  $(document).on('click', 'li', function(){
    //   $('#hotels').val($(this).text());
    //   $('#rooms').fadeOut();
    // });
</script>


@endpush
