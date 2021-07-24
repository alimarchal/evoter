@extends('AdminLTE.layout')
@section('custom-header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('title','Voter List')
@section('main-title','')
@section('breadcrumb','Voter List')
@section('body')
    <div class="row">
        <div class="col-12">
            <h4 style="font-family: urduFont" class="text-center">پاکستان تحریک انصاف آزاد جموں کشمیر</h4>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12">
            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Candidate Name</th>
                            <th>Party Name</th>
                            <th>Obtain Votes</th>
                            <th>Party Symbol</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($collection as $coll)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <a href="{{route('electionDashboard.edit',$coll->id)}}">{{$coll->candidate_name}}</a>
                                </td>
                                <td>{{$coll->party_name}}</td>
                                <td>{{$coll->obtain_votes}}</td>
                                <td>{{$coll->party_symbol}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('custom-footer')
    <!-- DataTables  & Plugins -->
    <script src="{{url('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@endsection
