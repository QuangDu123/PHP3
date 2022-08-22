@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
    <div class="ibox-head">
        <h2><center>DANH SÁCH FORM LIÊN HỆ</center></h2>
    <div class="ibox-body">
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Nội dung</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1;	?>
                @foreach ($fList as $a)
                <tr>
                        <td>
                            {{$stt++}}
                        </td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->noiDung}}</td>
                        <td> 
                            {{-- <a href="/admin/editForm/{{$a->id}}" class="btn btn-default btn-xs m-r-5" role="button" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a> --}}
                            <a href="/admin/deleteForm/{{$a->id}}" class="btn btn-default btn-xs m-r-5" role="button" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
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