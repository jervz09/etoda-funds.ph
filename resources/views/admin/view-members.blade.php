@extends('adminlte::page')
@section('title', 'Members')
@section('content_header')
    <h1>Toda Members</h1>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@stop
@section('content')
    <div class="container-fluid px-2 py-2">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{route('admin.new-member')}}" class="btn btn-success">Add New Member</a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped" id="member_table">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th colspan="2" class="text-center">Records</th>
                        <th class="text-center">Actions</th>
                    </thead>
                    <tbody>
                        @forelse ($members as $member)
                            <tr>
                                <td>{{$member->first_name.' '.$member->last_name}}</td>
                                <td>{{\Carbon\Carbon::parse($member->birthdate)->age;}}</td>
                                <td>{{$member->gender}}</td>
                                <td>{{$member->mobile_number}}</td>
                                <td><a href="{{route('admin.member-loans', ['member_id' => $member->id])}}" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                                <td><a href="{{route('admin.member-savings', ['member_id' => $member->id])}}" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                                <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-info">No records to display</td>
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
            $('#member_table').dataTable();
        })
    </script>
@stop
