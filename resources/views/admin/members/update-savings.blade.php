@extends('adminlte::page')
@section('title', 'Update Savings')
@section('content_header')
    <h1 class="text-bold">Update</h1>
@stop
@section('content')
    <div class="px-2 py-2">
        <div class="card p-4">
            <div class="row">
                <div class="col-sm-2">
                    <div class="row">
                        <img src="{{asset('assets/img/webarebears-200x200.png')}}" alt="" class="rounded-circle img-thumbnail img-fluid" >
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-xs btn-info btn-flat mt-1"><i class="fas fa-pen"></i> Edit</a>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-sm-9">
                    <div class="card w-full">
                        <div class="card-header">
                            <h4 class="card-title">{{$member->user->name}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p>{{ucfirst($member->gender)}}</p>
                                    <br>
                                    <p><span class="text-bold">Toda Group: </span>{{$member->toda_group}}</p>
                                </div>
                                <div class="col-6">
                                    <p><span class="text-bold">Address: </span>{{$member->address}}</p>
                                    <p><span class="text-bold">Mobile Number: </span>{{$member->mobile_number}}</p>
                                    <p><span class="text-bold">E-mail: </span>{{$member->user->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center justify-center align-items-center">
                            <h1 class="card-title text-bold text-dark">
                                Savings
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.add-savings')}}" method="post">
                                @csrf
                                <input type="hidden" name="member_id" value="{{$member->id}}">
                                <div class="form-row">
                                    <div class="col-3"></div>
                                    <label for="plate_number" class="col-3">Plate Number:</label>
                                    <div class="col-3">
                                        <input type="text" name="plate_number" class="text-center form-control @error('plate_number')
                                            is-invalid
                                        @enderror" value="{{$member->plate_number}}" readonly>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col-3"></div>
                                    <label for="cur_balance" class="col-3">Current Balance:</label>
                                    <div class="col-3">
                                        <input type="text" name="cur_balance" id="cur_balance" class="text-center form-control @error('cur_balance')
                                            is-invalid
                                        @enderror" value="{{floatval($savings)}}" readonly>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col-3"></div>
                                    <label for="amount_paid" class="col-3">Amount Paid:</label>
                                    <div class="col-3">
                                        <input type="text" name="amount_paid" id="amount_paid" class="text-center form-control @error('amount_paid')
                                            is-invalid
                                        @enderror" value="{{old('amount_paid')}}">
                                        @error('amount_paid')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col-3"></div>
                                    <label for="new_balance" class="col-3">New Balance:</label>
                                    <div class="col-3">
                                        <input type="text" name="new_balance" id="new_balance" class="text-center form-control @error('new_balance')
                                            is-invalid
                                        @enderror" readonly>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col-3"></div>
                                    <label for="date_updated" class="col-3">Date Updated:</label>
                                    <div class="col-3">
                                        <input type="date" name="date_updated" class="text-center form-control @error('date_updated')
                                            is-invalid
                                        @enderror" value="{{date('Y-m-d')}}" readonly>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <input type="submit" value="Submit" class="btn btn-block btn-success">
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        $(document).ready(function() {
            $('#amount_paid').keyup(function(event){

                if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
                    event.preventDefault(); //stop character from entering input
                }
                var cur = parseFloat($('#cur_balance').val())
                var amount = parseFloat($('#amount_paid').val());
                var new_bal = parseInt(cur + amount);
                let total_balance = Math.round(new_bal * 100 / 100).toFixed(2);
                if(!isNaN(total_balance)){
                    $('#new_balance').val(total_balance)
                }
            });

            $('#amount_paid').on('keypress', function (evt) {
                    evt = (evt) ? evt : window.event;
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                        return false;
                    }
            });
        });
    </script>
@stop
