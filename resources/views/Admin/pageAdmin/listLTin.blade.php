@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
    <div class="ibox-head">
        <h2><center>DANH SÁCH THỂ LOẠI</center></h2>
    <div class="ibox-body">
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Id thể loại</th>
                    <th>Tiêu dề thể loại</th>
                    <th>Ẩn(0)/Hiện(1)</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1;	?>
                @foreach ($data as $a)
                <tr>
                        <td>
                            {{$stt++}}
                        </td>
                        <td>{{$a->id}}</td>
                        <td>{{$a->ten}}</td>
                        <td>{{$a->anHien}}</td>
                        <td> 
                            <a href="{{route('editLTin',['id' =>$a->id])}}" class="btn btn-default btn-xs m-r-5" role="button" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                            <a href="{{route('deleteLTin',['id' =>$a->id])}}" class="btn btn-default btn-xs m-r-5" role="button" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
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