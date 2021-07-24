@extends('AdminLTE.dashboard-layout')
@section('title','Dashboard')
@section('main-title','Dashboard')
@section('breadcrumb','Dashboard')
@section('body')
    <div class="row">

        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h1>{{$collection->sum('khawaja_farooq')}}</h1>

                    <p style="font-size: 20px">Khawaja Farooq<br>
                        Pakistan Tehreek-e-Insaf AJK
                    </p>
                </div>
                <div class="icon">
                    <img src="{{url('img/farooq.jpg')}}" alt="" style="width: 100px;">
                </div>
{{--                <a href="{{route('voterList.index',['filter[gender]'=>'عورت'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>


        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h1>{{$collection->sum('iftikhar_gillani')}}</h1>

                    <p style="font-size: 20px">Syed Iftikhar Gillani<br>
                        Pakistan Muslim League (N) AJK
                    </p>
                </div>
                <div class="icon">
                    <img src="{{url('img/ifthair.jpg')}}" alt="" style="width: 100px;">
                </div>
                {{--                <a href="{{route('voterList.index',['filter[gender]'=>'عورت'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>



        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h1>{{$collection->sum('mubarak_haider')}}</h1>

                    <p style="font-size: 20px">Sardar Mubarak Haider<br>
                        Pakistan Peoples Party AJK
                    </p>
                </div>
                <div class="icon">
                    <img src="{{url('img/mubarak.jpg')}}" alt="" style="width: 100px;">
                </div>
                {{--                <a href="{{route('voterList.index',['filter[gender]'=>'عورت'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>


        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h1>{{$collection->sum('mukhtar_khan')}}</h1>

                    <p style="font-size: 20px">Sardar Mukhtar Khan<br>
                        Independent Candidate
                    </p>
                </div>
                <div class="icon">
                    <img src="{{url('img/mukhtar.jpg')}}" alt="" style="width: 100px;">
                </div>
                {{--                <a href="{{route('voterList.index',['filter[gender]'=>'عورت'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>


        <div class="col-lg-6 col-6">
        </div>

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    {{--                    <h3>{{\App\Models\VoterList::count()}}</h3>--}}
                    <h3>63,594</h3>

                    <p>Total Voters</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                {{--                <a href="{{route('voterList.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>
        <!-- ./col -->
    {{--        <div class="col-lg-3 col-6">--}}
    {{--            <!-- small box -->--}}
    {{--            <div class="small-box bg-success">--}}
    {{--                <div class="inner">--}}
    {{--                    <h3>{{$constituency_name->count()}}</h3>--}}

    {{--                    <p>Total Wards</p>--}}
    {{--                </div>--}}
    {{--                <div class="icon">--}}
    {{--                    <i class="ion ion-stats-bars"></i>--}}
    {{--                </div>--}}
    {{--                <a href="{{route('voterList.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    {{--                    <h3>{{\App\Models\VoterList::where('gender','مرد')->count()}}</h3>--}}
                    <h3>33,395 (54.42%)</h3>


                    <p>Male Voters </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                {{--                <a href="{{route('voterList.index',['filter[gender]'=>'مرد'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    {{--                    <h3>{{\App\Models\VoterList::where('gender','عورت')->count()}}</h3>--}}
                    <h3>30,199 (45.58%)</h3>

                    <p>Female Voters </p>
                </div>
                <div class="icon">
                    {{--                    <i class="ion ion-pie-graph"></i>--}}
                    <i class="ion ion-person-add"></i>
                </div>
                {{--                <a href="{{route('voterList.index',['filter[gender]'=>'عورت'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    {{--                    <h3>{{\App\Models\VoterList::where('gender','مرد')->count()}}</h3>--}}
                    <h3>114</h3>

                    <p>Total Polling Station</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                {{--                <a href="{{route('voterList.index',['filter[gender]'=>'مرد'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>

        {{--        @foreach($top_three as $top)--}}
        {{--        <div class="col-lg-3 col-6">--}}
        {{--            <!-- small box -->--}}
        {{--            <div class="small-box bg-danger">--}}
        {{--                <div class="inner">--}}
        {{--                    --}}{{--                    <h3>{{\App\Models\VoterList::where('gender','عورت')->count()}}</h3>--}}
        {{--                    <h1>{{$top->obtain_votes}}</h1>--}}

        {{--                    <p style="font-size: 20px">{{$top->candidate_name}} <br>--}}
        {{--                        {{$top->party_name}}--}}
        {{--                    </p>--}}
        {{--                </div>--}}
        {{--                <div class="icon">--}}
        {{--                    --}}{{--                    <i class="ion ion-pie-graph"></i>--}}
        {{--                    <i class="ion ion-person-add"></i>--}}
        {{--                </div>--}}
        {{--                --}}{{--                <a href="{{route('voterList.index',['filter[gender]'=>'عورت'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--            @endforeach--}}


    </div>
    <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    {{--    <section class="content">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <!-- BAR CHART -->--}}
    {{--                    <div class="card card-success">--}}
    {{--                        <div class="card-header">--}}
    {{--                            <h3 class="card-title">Bar Chart</h3>--}}

    {{--                            <div class="card-tools">--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
    {{--                                    <i class="fas fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
    {{--                                    <i class="fas fa-times"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body">--}}
    {{--                            <div class="chart">--}}
    {{--                                <canvas id="barChart" style="min-height: 250px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- /.card-body -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /.card -->--}}
    {{--                    <!-- AREA CHART -->--}}
    {{--                    <div class="card card-primary">--}}
    {{--                        <div class="card-header">--}}
    {{--                            <h3 class="card-title">Area Chart</h3>--}}

    {{--                            <div class="card-tools">--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
    {{--                                    <i class="fas fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
    {{--                                    <i class="fas fa-times"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body">--}}
    {{--                            <div class="chart">--}}
    {{--                                <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- /.card-body -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /.card -->--}}

    {{--                    <!-- DONUT CHART -->--}}
    {{--                    <div class="card card-danger">--}}
    {{--                        <div class="card-header">--}}
    {{--                            <h3 class="card-title">Donut Chart</h3>--}}

    {{--                            <div class="card-tools">--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
    {{--                                    <i class="fas fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
    {{--                                    <i class="fas fa-times"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body">--}}
    {{--                            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
    {{--                        </div>--}}
    {{--                        <!-- /.card-body -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /.card -->--}}

    {{--                    <!-- PIE CHART -->--}}
    {{--                    <div class="card card-danger">--}}
    {{--                        <div class="card-header">--}}
    {{--                            <h3 class="card-title">Pie Chart</h3>--}}

    {{--                            <div class="card-tools">--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
    {{--                                    <i class="fas fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
    {{--                                    <i class="fas fa-times"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body">--}}
    {{--                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
    {{--                        </div>--}}
    {{--                        <!-- /.card-body -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /.card -->--}}

    {{--                </div>--}}
    {{--                <!-- /.col (LEFT) -->--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <!-- LINE CHART -->--}}
    {{--                    <div class="card card-info">--}}
    {{--                        <div class="card-header">--}}
    {{--                            <h3 class="card-title">Line Chart</h3>--}}

    {{--                            <div class="card-tools">--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
    {{--                                    <i class="fas fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                                <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
    {{--                                    <i class="fas fa-times"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body">--}}
    {{--                            <div class="chart">--}}
    {{--                                <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- /.card-body -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /.card -->--}}





    {{--                </div>--}}
    {{--                <!-- /.col (RIGHT) -->--}}
    {{--            </div>--}}
    {{--            <!-- /.row -->--}}
    {{--        </div><!-- /.container-fluid -->--}}
    {{--    </section>--}}
    <!-- /.content -->

    <!-- /.content-wrapper -->
    {{--    @section('custom-footer')--}}
    {{--        <!-- Page specific script -->--}}
    {{--        <script>--}}
    {{--            $(function () {--}}
    {{--                /* ChartJS--}}
    {{--                 * ---------}}
    {{--                 * Here we will create a few charts using ChartJS--}}
    {{--                 */--}}

    {{--                //----------------}}
    {{--                //- AREA CHART ---}}
    {{--                //----------------}}

    {{--                // Get context with jQuery - using jQuery's .get() method.--}}
    {{--                var areaChartCanvas = $('#areaChart').get(0).getContext('2d')--}}

    {{--                var areaChartData = {--}}
    {{--                    labels  : [@foreach(\App\Models\ElectionDashboard::all() as $cand) '{{$cand->party_symbol}}', @endforeach],--}}
    {{--                    datasets: [--}}
    {{--                        {--}}
    {{--                            label               : '',--}}
    {{--                            backgroundColor     : 'rgba(60,141,188,0.9)',--}}
    {{--                            borderColor         : 'rgba(60,141,188,0.8)',--}}
    {{--                            pointRadius          : false,--}}
    {{--                            pointColor          : '#3b8bba',--}}
    {{--                            pointStrokeColor    : 'rgba(60,141,188,1)',--}}
    {{--                            pointHighlightFill  : '#fff',--}}
    {{--                            pointHighlightStroke: 'rgba(60,141,188,1)',--}}
    {{--                            data                : [@foreach(\App\Models\ElectionDashboard::all() as $cand) '{{$cand->obtain_votes}}', @endforeach]--}}
    {{--                        },--}}
    {{--                        {--}}
    {{--                            label               : '',--}}
    {{--                            backgroundColor     : 'rgba(210, 214, 222, 1)',--}}
    {{--                            borderColor         : 'rgba(210, 214, 222, 1)',--}}
    {{--                            pointRadius         : false,--}}
    {{--                            pointColor          : 'rgba(210, 214, 222, 1)',--}}
    {{--                            pointStrokeColor    : '#c1c7d1',--}}
    {{--                            pointHighlightFill  : '#fff',--}}
    {{--                            pointHighlightStroke: 'rgba(220,220,220,1)',--}}
    {{--                            data                : [0]--}}
    {{--                        },--}}
    {{--                    ]--}}
    {{--                }--}}

    {{--                var areaChartOptions = {--}}
    {{--                    maintainAspectRatio : false,--}}
    {{--                    responsive : true,--}}
    {{--                    legend: {--}}
    {{--                        display: false--}}
    {{--                    },--}}
    {{--                    scales: {--}}
    {{--                        xAxes: [{--}}
    {{--                            gridLines : {--}}
    {{--                                display : false,--}}
    {{--                            }--}}
    {{--                        }],--}}
    {{--                        yAxes: [{--}}
    {{--                            gridLines : {--}}
    {{--                                display : false,--}}
    {{--                            }--}}
    {{--                        }]--}}
    {{--                    }--}}
    {{--                }--}}

    {{--                // This will get the first returned node in the jQuery collection.--}}
    {{--                new Chart(areaChartCanvas, {--}}
    {{--                    type: 'line',--}}
    {{--                    data: areaChartData,--}}
    {{--                    options: areaChartOptions--}}
    {{--                })--}}

    {{--                //---------------}}
    {{--                //- LINE CHART ---}}
    {{--                //----------------}}
    {{--                var lineChartCanvas = $('#lineChart').get(0).getContext('2d')--}}
    {{--                var lineChartOptions = $.extend(true, {}, areaChartOptions)--}}
    {{--                var lineChartData = $.extend(true, {}, areaChartData)--}}
    {{--                lineChartData.datasets[0].fill = false;--}}
    {{--                lineChartData.datasets[1].fill = false;--}}
    {{--                lineChartOptions.datasetFill = false--}}

    {{--                var lineChart = new Chart(lineChartCanvas, {--}}
    {{--                    type: 'line',--}}
    {{--                    data: lineChartData,--}}
    {{--                    options: lineChartOptions--}}
    {{--                })--}}

    {{--                //---------------}}
    {{--                //- DONUT CHART ---}}
    {{--                //---------------}}
    {{--                // Get context with jQuery - using jQuery's .get() method.--}}
    {{--                var donutChartCanvas = $('#donutChart').get(0).getContext('2d')--}}
    {{--                var donutData        = {--}}
    {{--                    labels: [@foreach(\App\Models\ElectionDashboard::orderBy('id')->get() as $cand) '{{$cand->party_symbol}}', @endforeach ],--}}
    {{--                    datasets: [--}}
    {{--                        {--}}
    {{--                            data: [@foreach(\App\Models\ElectionDashboard::orderBy('id')->get() as $cand) '{{$cand->obtain_votes}}', @endforeach ],--}}
    {{--                            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de',--}}
    {{--                                '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de',--}}
    {{--                                '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de',--}}
    {{--                                '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de',],--}}
    {{--                        }--}}
    {{--                    ]--}}
    {{--                }--}}
    {{--                var donutOptions     = {--}}
    {{--                    maintainAspectRatio : false,--}}
    {{--                    responsive : true,--}}
    {{--                }--}}
    {{--                //Create pie or douhnut chart--}}
    {{--                // You can switch between pie and douhnut using the method below.--}}
    {{--                new Chart(donutChartCanvas, {--}}
    {{--                    type: 'doughnut',--}}
    {{--                    data: donutData,--}}
    {{--                    options: donutOptions--}}
    {{--                })--}}

    {{--                //---------------}}
    {{--                //- PIE CHART ---}}
    {{--                //---------------}}
    {{--                // Get context with jQuery - using jQuery's .get() method.--}}
    {{--                var pieChartCanvas = $('#pieChart').get(0).getContext('2d')--}}
    {{--                var pieData        = donutData;--}}
    {{--                var pieOptions     = {--}}
    {{--                    maintainAspectRatio : false,--}}
    {{--                    responsive : true,--}}
    {{--                }--}}
    {{--                //Create pie or douhnut chart--}}
    {{--                // You can switch between pie and douhnut using the method below.--}}
    {{--                new Chart(pieChartCanvas, {--}}
    {{--                    type: 'pie',--}}
    {{--                    data: pieData,--}}
    {{--                    options: pieOptions--}}
    {{--                })--}}

    {{--                //---------------}}
    {{--                //- BAR CHART ---}}
    {{--                //---------------}}
    {{--                var barChartCanvas = $('#barChart').get(0).getContext('2d')--}}
    {{--                var barChartData = $.extend(true, {}, areaChartData)--}}
    {{--                var temp0 = areaChartData.datasets[0]--}}
    {{--                var temp1 = areaChartData.datasets[1]--}}
    {{--                barChartData.datasets[0] = temp1--}}
    {{--                barChartData.datasets[1] = temp0--}}

    {{--                var barChartOptions = {--}}
    {{--                    responsive              : true,--}}
    {{--                    maintainAspectRatio     : false,--}}
    {{--                    datasetFill             : false--}}
    {{--                }--}}

    {{--                new Chart(barChartCanvas, {--}}
    {{--                    type: 'bar',--}}
    {{--                    data: barChartData,--}}
    {{--                    options: barChartOptions--}}
    {{--                })--}}

    {{--                //-----------------------}}
    {{--                //- STACKED BAR CHART ---}}
    {{--                //-----------------------}}
    {{--                var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')--}}
    {{--                var stackedBarChartData = $.extend(true, {}, barChartData)--}}

    {{--                var stackedBarChartOptions = {--}}
    {{--                    responsive              : true,--}}
    {{--                    maintainAspectRatio     : false,--}}
    {{--                    scales: {--}}
    {{--                        xAxes: [{--}}
    {{--                            stacked: true,--}}
    {{--                        }],--}}
    {{--                        yAxes: [{--}}
    {{--                            stacked: true--}}
    {{--                        }]--}}
    {{--                    }--}}
    {{--                }--}}

    {{--                new Chart(stackedBarChartCanvas, {--}}
    {{--                    type: 'bar',--}}
    {{--                    data: stackedBarChartData,--}}
    {{--                    options: stackedBarChartOptions--}}
    {{--                })--}}
    {{--            })--}}
    {{--        </script>--}}
    {{--    @endsection--}}
@endsection
