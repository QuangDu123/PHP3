@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md">
            <div class="ibox">
                        <h2><center>THÊM LOẠI TIN</center></h2>
                <div class="ibox-body">
                    <form action="/admin/addLTin" method="POST">
                        <div class="form-group">
                            <label>Tên loại tin</label>
                            <input name="tenLTin" class="form-control" type="text" placeholder="Tên loại tin">
                        </div>
                        <div class="form-group">
                            <label>Ẩn/Hiện loại tin</label><br>
                            <select name="anHien" class="form-control">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
</div>
@if(session('alert'))
    <section class='alert alert-success'>{{session('alert')}}</section>
@endif
@endsection