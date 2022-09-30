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
                            <h4 class="card-title">Renelle Sapin</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p>Female, 24 years old</p>
                                    <br>
                                    <p><span class="text-bold">Toda Group: </span>Mayondon Toda</p>
                                </div>
                                <div class="col-6">
                                    <p><span class="text-bold">Address: </span>Brgy. Mayondon Los Banos, Laguna</p>
                                    <p><span class="text-bold">Mobile Number: </span>9687375922</p>
                                    <p><span class="text-bold">E-mail: </span>sapinrenelle721@gmail.com</p>
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
                            <form action="" method="post">
                                @csrf
                                <p class="bg-gray px-2">Loan Terms</p>
                                <div class="form-row mt-3">
                                    <label for="amount" class="col-3">Loan Amount</label>
                                    <input type="text" name="amount" id="amount" class="col-3 form-control">
                                    <div class="col-1"></div>
                                    <label for="interest" class="col-2">Loan Interest %:</label>
                                    <input type="number" name="interest" id="interest" class="col-3 form-control" min="0" max="15">
                                </div>
                                <div class="form-row mt-3">
                                    <label for="release_date" class="col-3">Loan Release Date</label>
                                    <input type="date" name="release_date" id="release_date" class="col-3 form-control">
                                    <div class="col-3"></div>
                                    <select name="terms" id="terms" class="col-3 form-control">
                                        <option value="0">Daily</option>
                                        <option value="1">Weekly</option>
                                        <option value="2">Bi-Weekly</option>
                                        <option value="3">Monthly</option>
                                        <option value="4">Quarterly</option>
                                    </select>
                                </div>
                                <div class="form-row mt-3">
                                    <label for="maturity_date" class="col-3">Loan Maturity Date</label>
                                    <input type="date" name="maturity_date" id="maturity_date" class="col-3 form-control">
                                </div>
                                <p class="bg-gray px-2 mt-5">Payments</p>
                                <div class="form-row mt-3">
                                    <label for="due" class="col-2">Amount Due</label>
                                    <input type="text" name="due" id="due" class="col-2 form-control">
                                    <label for="paid" class="col-2">Amount Paid</label>
                                    <input type="text" name="paid" id="paid" class="col-2 form-control">
                                    <label for="balance" class="col-2">Outstanding Balance</label>
                                    <input type="text" name="balance" id="balance" class="col-2 form-control">
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
