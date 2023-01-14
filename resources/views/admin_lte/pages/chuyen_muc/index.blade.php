@extends('admin_lte.shares.master_lte')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Chuyên Mục</h1>
                </div>
            </div>
        </div>
    </div>
    <section id="app" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <form id="form">
                    <div class="card">
                        <div class="card-header">
                            Thêm Mới Chuyên Mục Bài Viết
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Tên Chuyên Mục</label>
                                <input v-model="add.ten_chuyen_muc" type="text" class="form-control" placeholder="Nhập vào tên loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Slug Chuyên Mục</label>
                                <input v-model="add.slug_chuyen_muc" type="text" class="form-control" placeholder="Nhập vào slug loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Tình Trạng</label>
                                <select v-model="add.is_open" class="form-control">
                                    <option value="1">Hiển Thị</option>
                                    <option value="0">Tạm Tắt</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button v-on:click="themMoi()" type="button" class="btn btn-primary">Thêm Mới</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            Danh Sách Chuyên Mục Bài Viết
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">#</th>
                                        <th class="text-center" scope="col">Tên Danh Mục</th>
                                        <th class="text-center" scope="col">Tình Trạng</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <template v-for="(v, k) in arr">
                                        <tr>
                                            <th class="text-center align-middle" scope="col">@{{ k + 1 }}</th>
                                            <td class="align-middle">@{{ v.ten_chuyen_muc }}</td>
                                            <td class="text-center align-middle">
                                                <button class="btn btn-primary" v-if="v.is_open == 1">Hiển Thị</button>
                                                <button class="btn btn-warning" v-else>Tạm Tắt</button>
                                            </td>
                                            <td class="text-center text-nowrap">
                                                <button v-on:click="edit = v" class="btn btn-info" data-toggle="modal" data-target="#editModal">Cập Nhật</button>
                                                <button v-on:click="del = v" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xóa Bỏ</button>
                                            </td>
                                        </tr>
                                    </template> --}}
                                </tbody>
                                {{-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn muốn xóa dữ liệu hay không?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button data-dismiss="modal" v-on:click="accpect_del()" type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <input v-model="edit.id" type="text" class="form-control" placeholder="Nhập vào tên loại sản phẩm">
                                            <div class="form-group">
                                                <label>Tên Chuyên Mục</label>
                                                <input v-model="edit.ten_chuyen_muc" type="text" class="form-control" placeholder="Nhập vào tên loại sản phẩm">
                                            </div>
                                            <div class="form-group">
                                                <label>Slug Chuyên Mục</label>
                                                <input v-model="edit.slug_chuyen_muc" type="text" class="form-control" placeholder="Nhập vào slug loại sản phẩm">
                                            </div>
                                            <div class="form-group">
                                                <label>Tình Trạng</label>
                                                <select v-model="edit.is_open" class="form-control">
                                                    <option value="1">Hiển Thị</option>
                                                    <option value="0">Tạm Tắt</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button data-dismiss="modal" v-on:click="accpect_update()" type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                </div> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
<tr>
    <th class="text-center align-middle" scope="col">@{{ k + 1 }}</th>
    <td class="align-middle">@{{ v.ten_chuyen_muc }}</td>
    <td class="text-center align-middle">
        <button class="btn btn-primary" v-if="v.is_open == 1">Hiển Thị</button>
        <button class="btn btn-warning" v-else>Tạm Tắt</button>
    </td>
    <td class="text-center text-nowrap">
        <button v-on:click="edit = v" class="btn btn-info" data-toggle="modal" data-target="#editModal">Cập Nhật</button>
        <button v-on:click="del = v" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xóa Bỏ</button>
    </td>
</tr>
@endsection
