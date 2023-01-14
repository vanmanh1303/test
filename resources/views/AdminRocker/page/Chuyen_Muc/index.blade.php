@extends('AdminRocker.share.master')
@section('noi_dung')
<div class="content-header">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Quản Lý Loại Sản Phẩm
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên Loại Sản Phẩm</label>
                        <input id="ten_loai_san_pham" type="text"
                            class="form-control" placeholder="Nhập vào tên loại sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Slug Loại Sản Phẩm</label>
                        <input id="slug_loai_san_pham" type="text" class="form-control"
                            placeholder="Nhập vào slug loại sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select id="is_open" class="form-control">
                            <option value="1">Hiển Thị</option>
                            <option value="0">Tạm Tắt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chọn Loại Sản Phẩm Cha</label>
                        <select id="id_loai_san_pham_cha" class="form-control">
                            <option value="0">Root</option>

                        </select>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary" id="ThemMoi">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Danh Sách Loại Sản Phẩm
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="view_table">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Tên Danh Mục</th>
                                <th class="text-center" scope="col">Tình Trạng</th>
                                <th class="text-center" scope="col">Danh Mục Cha</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $( document ).ready(function() {
            getData();

            function getData() {
                $.ajax({
                    url: "/admin/loai-san-pham/data",
                    type: "GET",
                    success: function(res){
                        var noi_dung = '';
                        $.each(res.data, function ($key, $value) {
                            noi_dung +='<tr>';
                            noi_dung +='<th class="text-center align-middle" scope="col">'+ ($key + 1) +'</th>';
                            noi_dung +='<td class="align-middle">'+ $value.ten_loai_san_pham +'</td>';
                            noi_dung +='<td class="text-center align-middle">';
                            if ($value.is_open == 1) {
                                noi_dung +='<button class="btn btn-primary">Hiển Thị</button>';
                            } else {
                                noi_dung +='<button class="btn btn-warning">Tạm Tắt</button>';
                            }
                            noi_dung +='</td>';
                            noi_dung +='<td class="text-center text-nowrap">';
                            noi_dung +='<button  class="btn btn-info" >Cập Nhật</button>';
                            noi_dung +='<button  class="btn btn-danger">Xóa Bỏ</button>';
                            noi_dung +='</td>';
                            noi_dung +='</tr>';
                        });

                        $("#view_table tbody").html(noi_dung);
                    }
                });
            };

            $('#ThemMoi').click(function() {
                var ten_loai_san_pham       = $('#ten_loai_san_pham').val();
                var slug_loai_san_pham      = $('#slug_loai_san_pham').val();
                var is_open                 = $('#is_open').val();
                var id_loai_san_pham_cha    = $('#id_loai_san_pham_cha').val();

                var payload = {
                    'ten_loai_san_pham'     : ten_loai_san_pham,
                    'slug_loai_san_pham'    : slug_loai_san_pham,
                    'is_open'               : is_open,
                    'id_loai_san_pham_cha'  : id_loai_san_pham_cha,
                };

                $.ajax({
                    url: "/admin/loai-san-pham/index",
                    type: "POST",
                    data: payload,
                    success: function(res){
                        if(res.status == true) {
                            toastr.success("Đã thêm mới thành công");
                            getData();
                        } else {
                            toastr.error("Đã có lỗi hệ thống!");
                        }
                    }
                });
            });


        });
    </script>
@endsection
