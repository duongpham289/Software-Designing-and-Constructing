@extends('admin.layouts.app', ['title' => 'Phòng', 'activePage' => 'rooms'])
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Icons</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý Phòng</h1>
        </div>
    </div>
    <!--/.row-->


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa Phòng</div>
                @if ($errors->any())
                    @component('admin.layouts.components.alert')
                    @slot('type','danger')
                    @slot('stroke','cancel')
                    {{ $errors->first() }}
                    @endcomponent
                @endif
                <div class="panel-body">
                    <form action="/admin/rooms/{{ $room->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="row" style="margin-bottom:40px">

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Loại Phòng</label>
                                <input type="text" name="type" class="form-control" value="{{ $room->type }}">
                            </div>
                            <div class="form-group">
                                <label>Giá Phòng</label>
                                <input type="number" name="price" class="form-control" value="{{ $room->price }}">
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select  name="status" class="form-control" value="{{$room->status}}">
                                    <option selected value="1">Còn Phòng</option>
                                    <option value="0">Hết Phòng</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh Phòng</label>
                                <input id="img" type="file" name="images" class="form-control hidden" onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" width="100%" height="350px" src="/assets/admin/img/import-img.png">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Chi tiết</label>
                                <textarea name="detail" style="width: 100%;height: 100px;">
                                {{$room->detail}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <div class="form-group">
                                <label>Miêu tả</label>
                                <textarea id="editor" name="description" style="width: 100%;height: 100px;">
                                    {{ $product->category->name }} //lưu vào $product tốn ram, dùng 2,3 lần trở lên (property)
                                    {{ $product->category->name }}
                                    {{ $product->category->name }}
                                    {{ $product->category->name }}
                                    {{ $product->category->name }}
                                </textarea>
                            </div> --}}
                            <button class="btn btn-success" name="add-product" type="submit">Sửa Phòng</button>
                            <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>

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
        function changeImg(input){
               //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
               if(input.files && input.files[0]){
                   var reader = new FileReader();
                   //Sự kiện file đã được load vào website
                   reader.onload = function(e){
                       //Thay đổi đường dẫn ảnh
                       $('#avatar').attr('src',e.target.result);
                   }
                   reader.readAsDataURL(input.files[0]);
               }
           }
           $(document).ready(function() {
               $('#avatar').click(function(){
                   $('#img').click();
               });
           });

    </script>
@endpush
