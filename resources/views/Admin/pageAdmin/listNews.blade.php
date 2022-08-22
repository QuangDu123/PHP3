@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
    <div class="ibox-head">
        <h2><center>DANH SÁCH BÀI VIẾT</center></h2>
    <div class="ibox-body">
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề </th>
                    <th>Ngày đăng</th>
                    <th>Loại tin</th>
                    <th>Lượt xem</th>
                    <th>Hình ảnh</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt=1?>
                @foreach ($data as $a)
                <tr>
                    <td>
                        {{$stt++}}
                    </td>
                    <td>{{$a->tieuDe}}</td>
                    <td>{{$a->ngayDang}}</td>
                    <td>{{$a->idLT}}</td>
                    <td>{{$a->xem}}</td>
                    <td><img width="100px" height="100px" src="/{{$a->urlHinh}}" alt="img"></td>
                    <td> 
                        <a href="{{route('editNews',['id' =>$a->id])}}" class="btn btn-default btn-xs m-r-5" role="button" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                        <a href="{{route('deleteNews',['id' =>$a->id])}}" class="btn btn-default btn-xs m-r-5" role="button" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection