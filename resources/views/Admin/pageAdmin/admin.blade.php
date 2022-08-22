@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
    <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{$tnews}}</h2>
                                <div class="m-b-5">TỔNG SỐ BÀI VIẾT</div><i class="ti-shopping-cart widget-stat-icon"></i>
                                {{-- <div><i class="fa fa-level-up m-r-5"></i><small>25% higher</small></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{$tviews}}</h2>
                                <div class="m-b-5">TỔNG SỐ LƯỢT XEM</div><i class="ti-bar-chart widget-stat-icon"></i>
                                {{-- <div><i class="fa fa-level-up m-r-5"></i><small>17% higher</small></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{$tBL}}</h2>
                                <div class="m-b-5">TỔNG BÌNH LUẬN</div><i class="fa fa- widget-stat-icon"></i>
                                {{-- <div><i class="fa fa-level-up m-r-5"></i><small>22% higher</small></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{$tuser}}</h2>
                                <div class="m-b-5">TỔNG USERS</div><i class="ti-user widget-stat-icon"></i>
                                {{-- <div><i class="fa fa-level-down m-r-5"></i><small>-12% Lower</small></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="flexbox mb-4">
                                    <div>
                                        <h3 class="m-0">Thống kê bài viết </h3>
                                        <div>Theo loại tin</div>
                                    </div>
                                </div>
                                <div>
                                    <canvas style=" width:50px;height=50px" id="myChart" ></canvas>
                                        <script>
                                            function get_api(){
                                                    return $.get("http://127.0.0.1:8000/api/tin");
                                
                                            }

                                            async function action() {
                                                
                                                var dataa = await get_api();
                                                console.log(dataa);

                                                const lab = dataa.map((v) =>{
                                                    return v.ten
                                                })

                                                const labels = lab;
                                                const datapost = dataa.map((v) =>{
                                                    return v.countPost
                                                })

                                            const data = {
                                                labels: labels,
                                                datasets: [{
                                                label: 'Số bài viết trong từng loại tin',
                                                backgroundColor: 'rgb(255, 99, 132)',
                                                borderColor: 'rgb(255, 99, 132)',
                                                data: datapost,
                                                }]
                                            };

                                            const config = {
                                                type: 'bar',
                                                data: data,
                                                options: {}
                                            };
                                            const myChart = new Chart(
                                                document.getElementById('myChart'),
                                                config
                                            );
                                            }

                                            action();
                                      
                                        </script>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        {{-- <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Statistics</div>
                            </div>
                            <div class="ibox-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <canvas id="doughnut_chart" style="height:160px;"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="m-b-20 text-success"><i class="fa fa-circle-o m-r-10"></i>Desktop 52%</div>
                                        <div class="m-b-20 text-info"><i class="fa fa-circle-o m-r-10"></i>Tablet 27%</div>
                                        <div class="m-b-20 text-warning"><i class="fa fa-circle-o m-r-10"></i>Mobile 21%</div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-divider list-group-full">
                                    <li class="list-group-item">Chrome
                                        <span class="float-right text-success"><i class="fa fa-caret-up"></i> 24%</span>
                                    </li>
                                    <li class="list-group-item">Firefox
                                        <span class="float-right text-success"><i class="fa fa-caret-up"></i> 12%</span>
                                    </li>
                                    <li class="list-group-item">Opera
                                        <span class="float-right text-danger"><i class="fa fa-caret-down"></i> 4%</span>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <style>
                    .visitors-table tbody tr td:last-child {
                        display: flex;
                        align-items: center;
                    }

                    .visitors-table .progress {
                        flex: 1;
                    }

                    .visitors-table .progress-parcent {
                        text-align: right;
                        margin-left: 10px;
                    }
                </style>
            </div>
@endsection