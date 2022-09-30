@extends('adminlte::page')
@section('title', 'View Loans')
@section('content_header')
    <h1 class="text-bold">Update</h1>
@stop
@section('content')
    <div class="px-2 py-2">
        <div class="card p-4">
            <div class="row">
                <div class="col-sm-2">
                    <div class="row">
                        <img src="{{asset($member->photo_url)}}" alt="" class="rounded-circle img-thumbnail img-fluid" >
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
                                    <p>{{ucwords($member->gender)}}</p>
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
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h2 class="card-title text-bold h3">
                            Loans History
                        </h2>
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                    </div>
                    <div class="col-4">
                        <a href="{{route('admin.new-loan', ['member_id' => $member->id])}}" class="btn btn-block btn-primary">Add Loan</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-borderd" id="loans-table">
                        <thead class="bg-gray">
                            <th>Name</th>
                            <th>Plate No.</th>
                            <th>Release</th>
                            <th>Maturity</th>
                            <th>Principal</th>
                            <th>Amount</th>
                            <th>Amount Paid</th>
                            <th>Balance</th>
                        </thead>
                        <tbody>
                            @forelse ($loans as $loan)
                                <tr>
                                    <td>{{$member->user->name}}</td>
                                    <td>{{$member->plate_number}}</td>
                                    <td>{{$loan->release_date}}</td>
                                    <td>{{$loan->maturity_date}}</td>
                                    <td>{{$loan->interest.'%'}} <br>
                                    <span class="text-info">
                                        @switch($loan->terms)
                                            @case(0)
                                                Daily
                                                @break
                                            @case(1)
                                                Weekly
                                                @break
                                            @case(2)
                                                Bi-weekly
                                                @break
                                            @case(3)
                                                Monthly
                                                @break
                                            @case(4)
                                                Quarterly
                                                @break
                                            @default
                                                NA
                                        @endswitch
                                    </span></td>
                                    <td>{{$loan->amount}}</td>
                                    <td></td>
                                    <td>{{$loan->balance}}</td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
