
<table class="table table-bordered" style="margin-top:20px;">

    <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Thông tin phòng</th>
            <th>Giá</th>
            <th>Chi tiết</th>
            <th>Trạng thái</th>
            <th width='18%'>Tùy chọn</th>
        </tr>
    </thead>
    <tbody>

        @forelse ($rooms as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>
                <div class="row">
                    <div class="col-md-3"><img src="{{$item->images}}" alt="{{$item->type}}" width="100px" class="thumbnail"></div>
                    <div class="col-md-9">
                        <p><strong>Loại phòng : {{ $item->type }}</strong></p>
                    </div>
                </div>
            </td>
            <td>{{$item->price}}</td>
            <td>{{ $item->detail }}</td>
            <td><a class="btn btn-{{ $item->status > 0 ? 'success' : 'danger' }}" href="#"
                role="button">
                {{ $item->status > 0 ? 'Còn phòng' : 'Hết phòng' }}
            </a></td>

            {{--  <td>{{ optional($item->category)->name }}</td>  --}}
            {{-- $item là 1 bản ghi product, hàm category() định nghĩa ở entities/product --}}
            <td>
                <a href="/admin/rooms/{{$item->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                <a href="/admin/rooms/{{$item->id}}" class="btn btn-danger btn-destroy"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="6">Không có bản ghi</td>
            </tr>
        @endforelse
    </tbody>
</table>
