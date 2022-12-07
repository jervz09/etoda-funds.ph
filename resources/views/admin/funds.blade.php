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
            <div class="card-header">
                <div class="float-right">
                    <a href="{{route('admin.new-funds')}}" class="btn btn-success">Add New Funds</a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordererd table-striped" id="funds_table">
                    <thead class="thead-dark">
                        <th>Amount</th>
                        <th>Current</th>
                        <th>Source</th>
                        {{-- <th class="text-center">
                            Action
                        </th> --}}
                    </thead>
                    <tbody>
                        @forelse ($funds as $fund)
                            <tr>
                                <td>{{$fund->amount}}</td>
                                <td>{{$fund->current}}</td>
                                <td>{{$fund->source}}</td>
                                {{-- <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td> --}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No records to show</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <th>Amount</th>
                        <th>Current</th>
                        <th>Sourde</th>
                        {{-- <th class="text-center">
                            Action
                        </th> --}}
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#funds_table').dataTable();
        })
    </script>
@stop
