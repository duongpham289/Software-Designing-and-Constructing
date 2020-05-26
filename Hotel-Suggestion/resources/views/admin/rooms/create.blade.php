@extends('admin.layouts.app', ['title' => 'Danh mục', 'activePage' => 'categories'])
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
                <h1 class="page-header">Thêm Phòng</h1>
            </div>
        </div>
		<!--/.row-->


		<div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm Phòng</div>
                    @if ($errors->any())
                    {{--  <div class="alert bg-{{ $type ?? 'danger' }}" role="alert">
                    <svg class="glyph stroked {{ $stroke }}">
                    <use xlink:href="#stroked-{{ $stroke }}"></use>
                    </svg> {{ $slot }}
                    <a href="#" class="pull-right">
                    <span class="glyphicon glyphicon-remove"></span>
                    </a>
                        </div>  --}}
                        @component('admin.layouts.components.alert')
                        @slot('type','danger')
                        @slot('stroke','cancel')
                        {{ $errors->first() }}
                        @endcomponent
                    @endif
                    <div class="panel-body">
                        <form action="/admin/rooms" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row" style="margin-bottom:40px">

                                    <div class="col-md-8">
                                        @include('admin.rooms.option')
                                        {{-- <div class="form-group">
                                            <label>Mã khách sạn</label>
                                            <input type="text" name="sku" class="form-control">
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Loại Phòng</label>
                                            <input type="text" name="type" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá Phòng</label>
                                            <input type="number" name="price" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Trạng thái phòng</label>
                                            <select name="status" class="form-control">
                                                <option value="1">Còn</option>
                                                <option value="0">Không</option>
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Số lượng</label>
                                            <input type="number" class="form-control" name="quantity">
                                        </div> --}}
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ảnh Phòng</label>
                                            <input id="images" type="file" name="images" class="form-control hidden"
                                                onchange="changeImg(this)">
                                            <img id="avatar" class="thumbnail" width="100%" height="350px" src="/assets/admin/img/import-img.png">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Chi tiết Phòng</label>
                                            <textarea name="detail" style="width: 100%;height: 100px;"></textarea>
                                        </div>
                                     </div>



                        </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- <div class="form-group">
                                        <label>Miêu tả</label>
                                        <textarea id="editor" name="description" style="width: 100%;height: 100px;"></textarea>
                                    </div> --}}
                                    <button class="btn btn-success" type="submit">Thêm Phòng</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                        <div class="clearfix"></div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
		<!--/.row-->
	</div>
	<!--/.main-->
    @endsection
