@extends('adminlte::page')
@section('title', 'Home')
@section('content_header')
    <h1>Home</h1>
@stop
@section('content')
    <div class="container-fluid mt-2">
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
