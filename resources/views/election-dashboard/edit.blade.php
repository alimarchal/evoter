@extends('AdminLTE.layout')
@section('title','')
@section('main-title','s')
@section('breadcrumb','')
@section('body')
    <div class="row">
        <div class="col-12">
            <h4 style="font-family: urduFont" class="text-center">پاکستان تحریک انصاف آزاد جموں کشمیر</h4>
            <hr>
        </div>
    </div>
    <br>
    <form method="post" action="{{route('electionDashboard.update',$electionDashboard->id)}}">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-3">
                <label for="polling_station_no">Polling Station No</label>
                <input type="text" class="form-control" id="polling_station_no" value="{{$electionDashboard->polling_station_no}}" name="polling_station_no">
            </div>


            <div class="col-3">
                <label for="type" >Type</label>
                <select class="form-control" id="type" name="type" required >
                    <option selected value="">Please Select</option>
                    <option value="Male Polling Station" @if($electionDashboard->type == "Male Polling Station") selected @endif>Male Polling Station</option>
                    <option value="Female Polling Station"  @if($electionDashboard->type == "Female Polling Station") selected @endif>Female Polling Station</option>
                    <option value="Combine"  @if($electionDashboard->type == "Combine") selected @endif>Combine</option>
                </select>
            </div>

            <div class="col-3">
                <label for="polling_station_name">Name Polling Station</label>
                <input type="text" class="form-control" id="polling_station_name"  value="{{$electionDashboard->polling_station_name}}" name="polling_station_name">
            </div>

            <div class="col-3">
                <label for="area">Area</label>
                <input type="text" class="form-control" id="area" value="{{$electionDashboard->area}}" name="area">
            </div>


            <div class="col-3">
                <label for="khawaja_farooq">Kh. Farooq Ahmed</label>
                <input type="number" class="form-control" id="khawaja_farooq" required  value="{{$electionDashboard->khawaja_farooq}}" min="0" name="khawaja_farooq">
            </div>

            <div class="col-3">
                <label for="iftikhar_gillani">Syed Iftikhar Gillani</label>
                <input type="number" class="form-control" id="iftikhar_gillani" required  value="{{$electionDashboard->iftikhar_gillani}}" min="0" name="iftikhar_gillani">
            </div>

            <div class="col-3">
                <label for="mubarak_haider">Sardar Mubarak Haider</label>
                <input type="number" class="form-control" id="mubarak_haider" required  value="{{$electionDashboard->mubarak_haider}}" min="0" name="mubarak_haider">
            </div>

            <div class="col-3">
                <label for="mukhtar_khan">Sardar Mukhtar Khan</label>
                <input type="number" class="form-control" id="mukhtar_khan" required  value="{{$electionDashboard->mukhtar_khan}}" min="0" name="mukhtar_khan">
            </div>


        </div>


        <br>

        <div class="col-12">
            <button type="submit" class="btn btn-success float-right" ><i class="far fa-credit-card"></i>
                Update
            </button>

        </div>
    </form>

@endsection
