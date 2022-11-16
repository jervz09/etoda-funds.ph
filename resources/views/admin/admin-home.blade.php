@extends('adminlte::page')
@section('title', 'Home')
@section('content_header')
    <h1>Home</h1>
@stop
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header text-center text-sm">
                        This page was last updated on <span class="text-bold text-dark">{{date('Y/m/d H:i')}}</span>. <span class="text-info">Refresh</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{$members_count}}</h3>
                                      <p>Member</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fas fa-user-plus"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                      More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="small-box bg-gradient-success">
                                    <div class="inner">
                                      <h3><strong>₱</strong>
                                        15 000</h3>
                                      <p>Total Savings</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fas fa-wallet"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                      More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="small-box bg-gradient-warning">
                                    <div class="inner">
                                      <h3>299</h3>
                                      <p>Total Loans Released</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fas fa-cash"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                      More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="small-box bg-gradient-danger">
                                    <div class="inner">
                                      <h3>5</h3>
                                      <p>Fully Paid Loans</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fas fa-cash-register"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                      More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="alert-heading">Announcements!</h4>
                    <p>Attention! The renewal of franchise is on December 2022.
                        Have a good day!</p>
                    <hr>
                    {{-- <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-info">Savings Collection Monthly</h3>
                            <a href="javascript:void(0)">View Report</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="position-relative mb-4">
                            <canvas id="visitors-chart" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-danger">Loans Released Monthly</h3>
                            <a href="javascript:void(0)">View Report</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="position-relative mb-4">
                            <canvas id="visitors-chart" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
