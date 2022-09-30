@extends('adminlte::page')
@section('title', 'Add New Loan Record')
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
                        <div class="card-header text-center">
                            <h1 class="card-title text-bold text-info">
                                Loans
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.create-new-loan')}}" method="post">
                                @csrf
                                <input type="hidden" name="member_id" value="{{$member->id}}">
                                <p class="bg-gray px-2">Loan Terms</p>
                                <div class="form-row mt-3">
                                    <label for="amount" class="col-3">Loan Amount</label>
                                    <div class="col-3">
                                        <input type="text" name="amount" id="amount" class="form-control @error('amount')
                                            is-invalid
                                        @enderror" value="{{old('amount')}}">
                                        @error('amount')
                                            <span class="text-danger mt-1">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-1"></div>
                                    <label for="interest" class="col-2">Loan Interest %:</label>
                                    <div class="col-3">
                                        <input type="number" name="interest" id="interest" class="form-control @error('interest')
                                            is-invalid
                                        @enderror" min="0" max="15" value="{{old('interest')}}">
                                        @error('interest')
                                            <span class="text-danger mt-1">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <label for="release_date" class="col-3">Loan Release Date</label>
                                    <div class="col-3">
                                        <input type="date" name="release_date" id="release_date" class="form-control @error('release_date')
                                            is-invalid
                                        @enderror" value="{{old('release_date')}}">
                                        @error('release_date')
                                            <span class="text-danger mt-1">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <select name="terms" id="terms" class="form-control @error('terms')
                                            is-invalid
                                        @enderror">
                                            <option value="0">Daily</option>
                                            <option value="1">Weekly</option>
                                            <option value="2">Bi-Weekly</option>
                                            <option value="3">Monthly</option>
                                            <option value="4">Quarterly</option>
                                        </select>
                                        @error('terms')
                                            <span class="text-danger mt-1">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <label for="maturity_date" class="col-3">Loan Maturity Date</label>
                                    <div class="col-3">
                                        <input type="date" name="maturity_date" id="maturity_date" class="form-control @error('maturity_date')
                                            is-invalid
                                        @enderror">
                                        @error('maturity_date')
                                            <span class="text-danger mt-1">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-10"></div>
                                    <button type="submit" class="btn btn-success pull-right col-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
