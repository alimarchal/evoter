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
                <label for="candidate_name">Candidate Name</label>
                <input type="text" class="form-control" id="candidate_name" value="{{$electionDashboard->candidate_name}}" name="candidate_name" readonly>
            </div>


            <div class="col-3">
                <label for="party_name" >Party Name</label>
                <input type="text" class="form-control" id="party_name"  value="{{$electionDashboard->party_name}}" name="party_name" readonly>
            </div>


            <div class="col-3">
                <label for="obtain_votes" >Votes Received</label>
                <input type="number" class="form-control" id="obtain_votes"  value="{{$electionDashboard->obtain_votes}}" min="0" name="obtain_votes">
            </div>


            <div class="col-3">
                <label for="party_symbol" >Party Symbol</label>
                <input type="text" class="form-control" id="party_symbol"  value="{{$electionDashboard->party_symbol}}" name="party_symbol" readonly>
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
