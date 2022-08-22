@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
    <div class="ibox-head">
        <h2><center>DANH SÁCH BÌNH LUẬN</center></h2>
    <div class="ibox-body">
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>idTin</th>
                    <th>Nội dung</th>
                    <th>User</th>
                    <th>Ẩn(0)/Hiện(1)</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1?>
                @foreach ($bl as $a)
                    <tr>
                        <td>
                            {{$stt++}}
                        </td>
                        <td>{{$a->idTin}}</td>
                        <td>{{$a->noiDung}}</td>
                        <td>{{$a->hoTen}}</td>
                        <td>{{$a->anHien}}</td>
                        <td> 
                            <form action="/admin/editBL/{{$a->id}}" method="post">
                                @csrf
                                    <button class="btn btn-default btn-xs m-r-5" type="submit" name="btn"><i class="fa fa-pencil font-14"></i></button>
                                    <a href="{{route('deleteBL',['id' =>$a->id])}}" class="btn btn-default btn-xs m-r-5" role="button" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
                            </form>
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