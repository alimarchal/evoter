@extends('AdminLTE.layout')
@section('title','')
@section('main-title','s')
@section('breadcrumb','')
@section('body')
    <div class="row">
        <div class="col-12">
            <h4 style="font-family: urduFont" class="text-center">پاکستان تحریک انصاف آزاد جموں کشمیر</h4>
            <h4 style="font-family: urduFont" class="text-center">حتمی انتخابی فہرست برائے آزاد جموں کشمیر</h4>
            <hr>
        </div>
    </div>
    <br>
    <form method="post" action="{{route('voterList.store')}}">
        @csrf
        <div class="row" style="font-family: urduFont; direction: rtl;">
            <div class="col-3">
                <label for="constituency_name" style="float: right;">انتخابی علاقے کا نام</label>
                <select class="form-control" id="constituency_name" name="constituency_name">
                    <option selected>انتخاب کریں</option>
                    @foreach(\App\Models\User::constituency_area_name() as $constituency_area_name)
                        <option value="{{$constituency_area_name}}">{{$constituency_area_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="moza_daha_city" style="float: right;">موضع/دیہہ/شہر</label>
                <input type="text" class="form-control" id="moza_daha_city" name="moza_daha_city">
            </div>
            <div class="col-3">
                <label for="patwar_circle_name" style="float: right;">پٹوار سرکل کا نام</label>
                <select class="form-control" id="patwar_circle_name" name="patwar_circle_name">
                    @foreach(\App\Models\User::patwar_circle_name() as $patwar_circle_name)
                        <option value="{{$patwar_circle_name}}">{{$patwar_circle_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="tehsil" style="float: right;">تحصیل</label>
                <select class="form-control" id="tehsil" name="tehsil">
                    @foreach(\App\Models\User::tehsil() as $tehsil)
                        <option value="{{$tehsil}}">{{$tehsil}}</option>
                    @endforeach
                </select>
            </div>

            <br>
            <br>
            <br>
            <br>

            <div class="col-3">
                <label for="district" style="float: right;">ضلع</label>
                <select class="form-control" id="district" name="district">
                    @foreach(\App\Models\User::district() as $district)
                        <option value="{{$district}}" selected>{{$district}}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-3">
                <label for="constituency_area_number" style="float: right;">انتحابی علاقے کا نمبر</label>
                <input type="text" class="form-control" id="constituency_area_number" name="constituency_area_number">
            </div>


            <div class="col-3">
                <label for="union_council" style="float: right;">یونین کونسل</label>
                <select class="form-control" id="union_council" name="union_council">
                    @foreach(\App\Models\User::union_council() as $union_council)
                        <option value="{{$union_council}}">{{$union_council}}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-3">
                <label for="gender" style="float: right;">جنس</label>
                <select class="form-control" id="gender" name="gender">
                    <option selected>انتخاب کریں</option>
                    @foreach(\App\Models\User::gender() as $gender)
                        <option value="{{$gender}}">{{$gender}}</option>
                    @endforeach
                </select>
            </div>

            <br>
            <br>
            <br>
            <br>
            <div class="col-3">
                <label for="name" style="float: right;">نام</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>


            <div class="col-3">
                <label for="father_husband_name" style="float: right;">ولد/ شوہر کا نام</label>
                <input type="text" class="form-control" id="father_husband_name" name="father_husband_name">
            </div>


            <div class="col-3">
                <label for="cnic" style="float: right;">کمپیوٹرائز شناختی کارڈ نمبر</label>
                <input type="text" class="form-control" id="cnic" name="cnic" maxlength="15" minlength="15" placeholder="82203-9442865-3">
            </div>


            <div class="col-3">
                <label for="occupation" style="float: right;">پیشہ</label>
                <input type="text" class="form-control" id="occupation" name="occupation">
            </div>
            <br>
            <br>
            <br>
            <br>

            <div class="col-3">
                <label for="age" style="float: right;">عمر</label>
                <input type="number" min="18" class="form-control" id="age" name="age">
            </div>


            <div class="col-3">
                <label for="address" style="float: right;">پتہ</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>


            <div class="col-3">
                <label for="mobile_number" style="float: right;">موبائل نمبر</label>
                <input type="text" class="form-control" id="mobile_number" name="mobile_number">
            </div>


            <div class="col-3">
                <label for="polling_station_no" style="float: right;">پولنگ اسٹیشن</label>
                <input type="text" class="form-control" id="polling_station_no" name="polling_station_no">
            </div>

            <br>
            <br>
            <br>
            <br>
            <div class="col-3">
                <label for="potential_voter" style="float: right;">ممکنہ ووٹر</label>
                <select class="form-control" id="potential_voter" name="potential_voter">
                    @foreach(\App\Models\User::potential_voter() as $potential_voter)
                        <option value="{{$potential_voter}}">{{$potential_voter}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <br>

        <div class="col-12">
            <button type="submit" class="btn btn-success float-right" style="direction: rtl"><i class="far fa-credit-card"></i>
                محفوظ کریں
            </button>

        </div>
    </form>


    <br>
    <br>
    <br>
@endsection
