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
                            <div class="col-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info elevation-1">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">
                                            Registered Members
                                        </span>
                                        <span class="info-box-number text-right">
                                            210
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success elevation-1">
                                        <i class="fas fa-wallet"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">
                                            Total Savings
                                        </span>
                                        <span class="info-box-number text-right">
                                            <strong>₱</strong>
                                            15 000
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-warning elevation-1">
                                        <i class="fas fa-cash-register"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">
                                            Total Loans Released
                                        </span>
                                        <span class="info-box-number text-right">
                                            <strong>₱</strong>
                                            350 000
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-warning elevation-1">
                                        <i class="fas fa-cash-register"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">
                                            Fully Paid Loans
                                        </span>
                                        <span class="info-box-number text-right">
                                            10
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Announcements</h2>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">
                            Attention! The renewal of franchise is on December 2022.
                            Have a good day!
                        </p>
                    </div>
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
