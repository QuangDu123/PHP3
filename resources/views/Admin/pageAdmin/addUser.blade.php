@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md">
            <div class="ibox">
                        <h2><center>THÊM USER</center></h2>
                <div class="ibox-body">
                    <form>
                        <div class="form-group">
                            <label>Tên User</label>
                            <input class="form-control" type="text" placeholder="Tên tiêu đề">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control" type="text" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input class="form-control" type="text" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Hình ảnh</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                          </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection