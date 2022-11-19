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
                        <img src="{{asset($member->photo_url)}}" alt="" class="rounded-circle img-thumbnail img-fluid" style="min-width:200px;height:200px" >
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center justify-center align-items-center">
                            <h1 class="card-title text-bold text-dark">
                                Savings History
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-row">
                                        <label for="cur_balance" class="col-6">Current Savings as of <span class="text-info">{{date('F j, Y')}}</span></label>
                                        <div class="col-auto">
                                            <input type="text" name="cur_balance" class="form-control" value="{{number_format((float)$savings->sum('amount'), 2, '.', '')}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-block btn-success" href="{{route('admin.update-member-savings-record', ['member_id' => $member->id])}}">Add Savings</a>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="bg-info">
                                            <th>Name</th>
                                            <th>Plate No.</th>
                                            <th>Balance</th>
                                            <th>Amount Paid</th>
                                            <th>New Balance</th>
                                            <th>Transaction Date</th>
                                        </thead>
                                        <tbody>
                                            @forelse ($savings as $saving)
                                                <tr>
                                                    <td>{{$member->user->name}}</td>
                                                    <td>{{$member->plate_number}}</td>
                                                    <td></td>
                                                    <td>{{$saving->amount}}</td>
                                                    <td></td>
                                                    <td>{{$saving->created_at->format('F j, Y h:i a')}}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-info">No records to show</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
