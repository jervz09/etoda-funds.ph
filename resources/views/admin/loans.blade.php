@extends('adminlte::page')
@section('title', 'Loans')
@section('content_header')
    <h1>Loans</h1>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@stop
@section('content')
    <div class="container-fluid px-2 py-2">
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-bordererd table-striped" id="loans_table">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Date Released</th>
                        <th>Maturity Date</th>
                        <th>Principal</th>
                        <th>Due</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th class="text-center">
                            Action
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($loans as $loan)
                            <tr>
                                <td>{{$loan->member->user->name}}</td>
                                <td>{{$loan->release_date}}</td>
                                <td>{{$loan->maturity_date}}</td>
                                <td>{{$loan->interest.'%'}} <br> <span class="text-info">
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
                                <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No records to show</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#loans_table').dataTable();
        })
    </script>
@stop
