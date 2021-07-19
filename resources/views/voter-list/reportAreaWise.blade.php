@extends('AdminLTE.layout')
@section('custom-header')

@endsection
@section('title','Area Wise Report')
@section('main-title','')
@section('breadcrumb','Area Wise Report')
@section('body')
    <div class="row">
        <div class="col-12">
            <h4 style="font-family: urduFont" class="text-center">حتمی انتخابی فہریست برائے آزاد کشمیر</h4>
        </div>

        <div id="myContent" class='col-12 hidden'>
            <form method="get" action="{{route('voterList.reportAreaWise')}}">
                <div class="row" style="direction: rtl; text-align: right">
                    <div class="col-2">
                        <label for="constituency_area_number" style="float: right;">انتحابی علاقے کا نمبر</label>
                        <input type="text" class="form-control" id="constituency_area_number" name="filter[constituency_area_number]" value="{{!empty(request()->filter['constituency_area_number'])?request()->filter['constituency_area_number']:''}}">
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
            <table class="table table-bordered text-right m-auto" style="direction: rtl; width: 40%; font-family: urduFont">
                <thead>
                <tr class="text-center">
                    <th colspan="3">ووٹرز کی تفصیل</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($collection as $coll)
                    <tr>
                        <td style="width: 50%;">{{$coll->gender}}</td>
                        <td style="width: 50%;">{{$coll->total}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td>کل ووٹر</td>
                    <td>{{$collection->sum('total')}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('custom-footer')

    <script>
        function toggler(divId) {
            $("#" + divId).toggle();
        }
    </script>
@endsection
