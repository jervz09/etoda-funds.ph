@extends('adminlte::page')
@section('title', 'Add New Member')
@section('content_header')
    <h1 class="text-bold">
        Add New Member
    </h1>
@stop
@section('content')
    <div class="container-fluid px-2 py-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <form action="" method="post">
                            @csrf
                            <div class="form-row">
                                <label for="first_name" class="col-3">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="col-9 form-control">
                            </div>
                            <div class="form-row mt-2">
                                <label for="last_name" class="col-3">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="col-9 form-control">
                            </div>
                            <div class="form-row mt-2">
                                <label for="gender" class="col-3">Gender</label>
                                <select name="gender" id="gender" class="col-3 form-control">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option value="o">Other</option>
                                </select>
                                <div class="col-1"></div>
                                <label for="mobile_number" class="col-2">Mobile Number</label>
                                <div class="col-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+63</span>
                                        </div>
                                        <input type="text" id="mobile_number" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="address" class="col-3">Home Address</label>
                                <input type="text" name="address" id="address" class="col-9 form-control">
                            </div>
                            <div class="form-row mt-2">
                                <label for="email" class="col-3">Email Address</label>
                                <input type="email" name="email" id="email" class="col-3 form-control">
                                <div class="col-1"></div>
                                <label for="toda_group" class="col-2">Toda Group</label>
                                <select name="toda_group" id="toda_group" class="col-3 form-control">
                                    <option value="Anos">Anos</option>
                                    <option value="Bagong Silang">Bagong Silang</option>
                                    <option value="Bambang">Bambang</option>
                                    <option value="Batong Malake">Batong Malake</option>
                                    <option value="Baybayin">Baybayin</option>
                                    <option value="Bayog">Bayog</option>
                                    <option value="Lalakay">Lalakay</option>
                                    <option value="Maahas">Maahas</option>
                                    <option value="Malinta">Malinta</option>
                                    <option value="Mayondon">Mayondon</option>
                                    <option value="Putho-Tuntungin">Putho-Tuntungin</option>
                                    <option value="San Antonio">San Antonio</option>
                                    <option value="Tadlac">Tadlac</option>
                                    <option value="Timugan">Timugan</option>
                                </select>
                            </div>
                            <div class="form-row mt-2">
                                <label for="plate_number" class="col-3">Plate Number</label>
                                <input type="text" name="plate_number" id="plate_number" class="col-3 form-control">
                            </div>
                            <div class="form-row mt-2">
                                <label for="member_photo" class="col-3">Member's Photo</label>
                                <input type="file" name="member_photo" id="member_photo" class="col-3 form-control">
                            </div>
                            <div class="form-row">
                                <div class="col-10"></div>
                                <div class="col-2">
                                    <button type="submit" id="submit" class="btn btn-block btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
