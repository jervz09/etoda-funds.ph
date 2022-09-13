@extends('adminlte::page')
@section('title', 'Loans')
@section('content_header')
    <h1>Loans</h1>
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
                        <th class="text-center" colspan="2">
                            Status
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Renelle Sapin</td>
                            <td>4/6/22</td>
                            <td>4/12/22</td>
                            <td>3%</td>
                            <td>6 180.00</td>
                            <td>6 000.00</td>
                            <td>180.00</td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Alberto Sotto Jr.</td>
                            <td>4/7/22</td>
                            <td>4/13/22</td>
                            <td>3%</td>
                            <td>1 000.00</td>
                            <td>1 000.00</td>
                            <td>0.00</td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Alexis Smith</td>
                            <td>4/8/22</td>
                            <td>4/14/22</td>
                            <td>3%</td>
                            <td>1 500.00</td>
                            <td>500.00</td>
                            <td>1 000.00</td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Tyler Frost</td>
                            <td>4/10/22</td>
                            <td>4/16/22</td>
                            <td>3%</td>
                            <td>2 500.00</td>
                            <td>1 500.00</td>
                            <td>1 000.00</td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Racy Hudgens</td>
                            <td>4/11/22</td>
                            <td>4/17/22</td>
                            <td>3%</td>
                            <td>3 200.00</td>
                            <td>2 000.00</td>
                            <td>1 200.00</td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Vincenzo Cailles</td>
                            <td>4/12/22</td>
                            <td>4/18/22</td>
                            <td>3%</td>
                            <td>6 000.00</td>
                            <td>6 000.00</td>
                            <td>0.00</td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
