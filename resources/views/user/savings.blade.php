@extends(('adminlte::page'))
@section('title', 'Savings')
@section('content_header')
    <h1>Savings</h1>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@stop
@section('content')
    <div class="container-fluid px-2 py-2">
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped" id="savings_table">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Plate No.</th>
                        <th>Balance</th>
                        <th>Last Transaction</th>
                        {{-- <th class="text-center">Action</th> --}}
                    </thead>
                    <tbody>
                        @forelse ($members as $member)
                        @php

                            $m_name = $member->user->name;
                            $m_plate_number = $member->plate_number;
                            $m_transaction = $member->transactions;
                        @endphp
                        @empty
                            <tr>
                                <td colspan="5" class="text-info">No Records to show</td>
                            </tr>
                        @endforelse
                        @foreach ( $m_transaction->where('transaction_type', 0) as $transaction)
                            <tr>
                                <td>{{$m_name}}</td>
                                <td>{{$m_plate_number}}</td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->created_at->format('F j, Y h:i a')}}}</td>
                                {{-- <td class="text-center"><a href="{{route('admin.update-member-savings-record', ['member_id' => $member->id])}}" class="text-info"><i class="fas fa-pen"></i></a></td> --}}
                            </tr>
                        @endforeach

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
            $('#savings_table').dataTable();
        })
    </script>
@stop
