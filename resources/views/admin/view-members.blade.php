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
                        <th colspan="2" class="text-center">Actions</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Renelle Sapin</td>
                            <td>24</td>
                            <td>Female</td>
                            <td>9687375922</td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Alberto Sotto Jr.</td>
                            <td>22</td>
                            <td>Male</td>
                            <td>9679774392</td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Alexus Smith</td>
                            <td>22</td>
                            <td>Male</td>
                            <td>9998683281</td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Tyler Frost</td>
                            <td>26</td>
                            <td>Male</td>
                            <td>9687743902</td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Racy Hudgens</td>
                            <td>23</td>
                            <td>Female</td>
                            <td>9078974393</td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Samantha Cruz</td>
                            <td>28</td>
                            <td>Female</td>
                            <td>9759896345</td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Vincenzo Cailles</td>
                            <td>24</td>
                            <td>Male</td>
                            <td>9669789670</td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Adie Alonzo</td>
                            <td>22</td>
                            <td>Male</td>
                            <td>9685469211</td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-success">Loans</a></td>
                            <td><a href="#" class="btn btn-xs btn-flat btn-block btn-primary">Savings</a></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
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
            let table = new DataTable('#member_table', {

            })
        })
    </script>
@stop
