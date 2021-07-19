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

        <div id="myContent" class='col-12 hidden'>
            <form method="get" action="{{route('voterList.index')}}">
                <div class="row" style="direction: rtl; text-align: right">
                    <div class="col-2">
                        <label for="cnic" style="float: right;"> شناختی کارڈ نمبر</label>
                        <input type="text" class="form-control" value="{{!empty(request()->filter['cnic'])?request()->filter['cnic']:''}}"  id="cnic" name="filter[cnic]" maxlength="15" placeholder="82203-9442865-3">
{{--                        --}}
                    </div>
                    <div class="col-3">
                        <label for="name" style="float: right;">نام</label>
                        <input type="text" class="form-control" id="name" name="filter[name]" value="{{!empty(request()->filter['name'])?request()->filter['name']:''}}" >
                    </div>
                    <div class="col-3">
                        <label for="father_husband_name" style="float: right;">ولد/ شوہر کا نام</label>
                        <input type="text" class="form-control" id="father_husband_name" name="filter[father_husband_name]"  value="{{!empty(request()->filter['father_husband_name'])?request()->filter['father_husband_name']:''}}" >
                    </div>
                    <div class="col-2">
                        <label for="moza_daha_city" style="float: right;">موضع/دیہہ/شہر</label>
                        <input type="text" class="form-control" id="moza_daha_city" name="filter[moza_daha_city]" value="{{!empty(request()->filter['moza_daha_city'])?request()->filter['moza_daha_city']:''}}" >
                    </div>
                    <div class="col-2">
                        <label for="constituency_area_number" style="float: right;">انتحابی علاقے کا نمبر</label>
                        <input type="text" class="form-control" id="constituency_area_number" name="filter[constituency_area_number]"  value="{{!empty(request()->filter['constituency_area_number'])?request()->filter['constituency_area_number']:''}}">
                    </div>
                    <div class="col-2">
                        <label for="constituency_name" style="float: right;">انتخابی علاقے کا نام</label>
                        <select class="form-control" id="constituency_name" name="filter[constituency_name]">
                            <option selected value="">انتخاب کریں</option>
                            @foreach(\App\Models\User::constituency_area_name() as $constituency_area_name)
                                <option value="{{$constituency_area_name}}" @if(!empty(request()->filter['constituency_name']) && $constituency_area_name == request()->filter['constituency_name']) selected @endif>{{$constituency_area_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="gender" style="float: right;">جنس</label>
                        <select class="form-control" id="gender" name="filter[gender]">
                            <option selected value="">انتخاب کریں</option>
                            @foreach(\App\Models\User::gender() as $gender)
                                <option value="{{$gender}}"  @if(!empty(request()->filter['gender']) && $gender == request()->filter['gender']) selected @endif >{{$gender}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="patwar_circle_name" style="float: right;">پٹوار سرکل کا نام</label>
                        <select class="form-control" id="patwar_circle_name" name="filter[patwar_circle_name]">
                            <option selected value="">انتخاب کریں</option>
                            @foreach(\App\Models\User::patwar_circle_name() as $patwar_circle_name)
                                <option value="{{$patwar_circle_name}}" @if(!empty(request()->filter['patwar_circle_name']) && $patwar_circle_name == request()->filter['patwar_circle_name']) selected @endif >{{$patwar_circle_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="tehsil" style="float: right;">تحصیل</label>
                        <select class="form-control" id="tehsil" name="filter[tehsil]">
                            <option selected value="">انتخاب کریں</option>
                            @foreach(\App\Models\User::tehsil() as $tehsil)
                                <option value="{{$tehsil}}" @if(!empty(request()->filter['tehsil']) && $tehsil == request()->filter['tehsil']) selected @endif>{{$tehsil}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="district" style="float: right;">ضلع</label>
                        <select class="form-control" id="district" name="filter[district]">
                            <option selected value="">انتخاب کریں</option>
                            @foreach(\App\Models\User::district() as $district)
                                <option value="{{$district}}" @if(!empty(request()->filter['district']) && $district == request()->filter['district']) selected @endif>{{$district}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="union_council" style="float: right;">یونین کونسل</label>
                        <select class="form-control" id="union_council" name="filter[union_council]">
                            <option selected value="">انتخاب کریں</option>
                            @foreach(\App\Models\User::union_council() as $union_council)
                                <option value="{{$union_council}}" @if(!empty(request()->filter['union_council']) && $union_council == request()->filter['union_council']) selected @endif>{{$union_council}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <dir class="row">
                    <div class="col-md">
                        <input type="submit" class="btn btn-success float-right" value="تلاش کریں">
                    </div>
                </dir>
            </form>
            <br>
        </div>

        <div class="col-12">
            <a href="#" class="btn btn-success float-left" onclick="toggler('myContent');">Show/Hide</a>
        </div>


    </div>
    <br>

    <div class="row">
        <div class="col-12">
            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped text-right" style="direction: rtl;">
                        <thead>
                        <tr>
                            <th>نمبر</th>
                            <th>نام</th>
                            <th>ولد/ شوہر</th>
                            <th>شناختی کارڈ نمبر</th>
                            <th>پتہ</th>
                            <th>وارڈ</th>
                            <th>علاقے کا نمبر</th>
                            <th>علاقے کا نمبر</th>
                            <th>پیشہ</th>
                            {{--                            <th>موضع/دیہہ/شہر</th>--}}
                            {{--                            <th>پٹوار سرکل</th>--}}
                            {{--                            <th>تحصیل</th>--}}
                            {{--                            <th>ضلع</th>--}}

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($collection as $coll)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$coll->name}}</td>
                                <td>{{$coll->father_husband_name}}</td>
                                <td>{{$coll->cnic}}</td>
                                <td>{{$coll->address}}</td>
                                <td>{{$coll->constituency_name}}</td>
                                <td>{{$coll->constituency_area_number}}</td>
                                <td>{{$coll->occupation}}</td>
                                <td>{{$coll->occupation}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                        {{--                        <tfoot>--}}
                        {{--                        <tr>--}}
                        {{--                            <th>Rendering engine</th>--}}
                        {{--                            <th>Browser</th>--}}
                        {{--                            <th>Platform(s)</th>--}}
                        {{--                            <th>Engine version</th>--}}
                        {{--                            <th>CSS grade</th>--}}
                        {{--                        </tr>--}}
                        {{--                        </tfoot>--}}
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
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        function toggler(divId) {
            $("#" + divId).toggle();
        }
    </script>
@endsection
