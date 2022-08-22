@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
    <div class="ibox-head">
        <h2><center>DANH SÁCH TIN TỨC</center></h2>
    <div class="ibox-body">
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th width="50px"></th>
                    <th>Họ và Tên</th>
                    <th>Email</th>
                    <th>Hình ảnh</th>
                    <th>Vai trò</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1?>
                @foreach ($user as $a)
                    <tr>
                        <td>
                            {{$stt++}}
                        </td>
                        <td>{{$a->hoTen}}</td>
                        <td>{{$a->email}}</td>
                        <td><img src="{{asset($a->urlHinh)}}" width="100px" height="100px" alt="Image"></td>
                        <td>{{$a->vai_tro}}</td>
                        <td>
                            <a href="/admin/editUser/{{$a->id}}" class="btn btn-default btn-xs m-r-5" role="button" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                            <a href="/admin/deleteUser/{{$a->id}}" class="btn btn-default btn-xs" role="button" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@if(session('alert'))
    <section class='alert alert-success'>{{session('alert')}}</section>
@endif
@endsection