<div class="form-group">
    <label>Khách sạn</label>
    <select name="hotel_id" class="form-control" id="hotels"   >
        {{-- <option value='1' selected>Nam</option>
        <option value='3'>---|Áo khoác nam</option>
        <option value='2'>Nữ</option>
        <option value='4'>---|Áo khoác nữ</option> --}}

        @forelse ($hotels as $item)
            <option value="{{ $item->id }} ">{{$item->name}}</option>

            @empty {{--Xảy ra khi rooms = NULL (Thành phần của forelse) --}}
            <span>Không tìm thấy bản ghi</span>
        @endforelse  {{-- Kết hợp của if và foreach --}}
    </select>
    <div id="rooms"></div>
</div>
