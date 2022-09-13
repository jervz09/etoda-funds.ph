@extends(('adminlte::page'))
@section('title', 'Savings')
@section('content_header')
    <h1>Savings</h1>
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
                        <th class="text-center" colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Renelle Sapin</td>
                            <td>JYT-098</td>
                            <td>6000.00</td>
                            <td>04/06/2022 4:00 PM<br> <span class="text-info">500.00</span></td>
                            <td class="text-center"><a href="{{route('admin.update-member-savings-record')}}" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Alberto Sotto Jr.</td>
                            <td>XYZ-046</td>
                            <td>1550.00</td>
                            <td>04/06/2022 5:25 PM<br> <span class="text-info">4.50</span></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Alexus Smith</td>
                            <td>ABC-202</td>
                            <td>1000.00</td>
                            <td>04/08/2022 10:05 am<br> <span class="text-info">400.00</span></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Tyler Frost</td>
                            <td>HGT-589</td>
                            <td>3500.00</td>
                            <td>04/10/2022 2:30 PM<br> <span class="text-info">100.00</span></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Racy Hudgens</td>
                            <td>KJH-678</td>
                            <td>575.00</td>
                            <td>04/12/2022 9:30 am<br> <span class="text-info">150.00</span></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>Vincenzo Cailles</td>
                            <td>KHB-908</td>
                            <td>780.00</td>
                            <td>04/12/2022 1:43 PM<br> <span class="text-info">50.00</span></td>
                            <td class="text-center"><a href="" class="text-info"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center"><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
