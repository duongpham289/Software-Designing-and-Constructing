@forelse ($hotels as $item)
    <option>{{$item->name}}</option>
    
    @empty {{--Xảy ra khi rooms = NULL (Thành phần của forelse) --}}
    <span>Không tìm thấy bản ghi</span>
@endforelse  {{-- Kết hợp của if và foreach --}}

