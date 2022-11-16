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
                    <div class="card-header">
                        @if(Session::has('message'))
                            <p class="alert alert-success">{!! Session::get('message') !!}</p>
                        @endif
                    </div>
                    <div class="card-body ">
                        <form action="add-member" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <label for="first_name" class="col-3">First Name</label>
                                <div class="col-9">
                                    <input type="text" name="first_name" id="first_name" class="form-control @error('first_name')
                                        is-invalid
                                    @enderror" value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="last_name" class="col-3">Last Name</label>
                                <div class="col-9">
                                    <input type="text" name="last_name" id="last_name" class="form-control @error('last_name')
                                        is-invalid
                                    @enderror" value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="gender" class="col-3">Gender</label>
                                <div class="col-3">
                                    <select name="gender" id="gender" class="form-control @error('gender')
                                        is-invalid
                                    @enderror">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @error('gender')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-1"></div>
                                <label for="mobile_number" class="col-2">Mobile Number</label>
                                <div class="col-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+63</span>
                                        </div>
                                        <input type="text" id="mobile_number" name="mobile_number" class="form-control @error('mobile_number')
                                            is-invalid
                                        @enderror">
                                    </div>
                                    @error('mobile_number')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="address" class="col-3">Home Address</label>
                                <div class="col-9">
                                    <input type="text" name="address" id="address" class="form-control @error('address')
                                        is-invalid
                                    @enderror">
                                    @error('address')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                {{-- <label for="email" class="col-3">Email Address</label>
                                <div class="col-3">
                                    <input type="email" name="email" id="email" class="form-control @error('email')
                                        is-invalid
                                    @enderror">
                                    @error('email')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-1"></div> --}}
                                <label for="birthdate" class="col-3">Birthdate</label>
                                <div class="col-3">
                                    <input type="date" name="birthdate" id="birthdate" class="form-control @error('birthdate')
                                        is-invalid
                                    @enderror">
                                    @error('birthdate')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-1"></div>
                                <label for="toda_group" class="col-2">Toda Group</label>
                                <div class="col-3">
                                    <select name="toda_group" id="toda_group" class="form-control @error('toda_group')
                                        is-invalid
                                    @enderror">
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
                                    @error('toda_group')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="plate_number" class="col-3">Plate Number</label>
                                <div class="col-3">
                                    <input type="text" name="plate_number" id="plate_number" class="form-control @error('plate_number')
                                        is-invalid
                                    @enderror" value="{{ old('plate_number') }}">
                                    @error('plate_number')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="member_photo" class="col-3">Member's Photo</label>
                                <div class="col-3">
                                    <input type="file" name="member_photo" id="member_photo" class="form-control @error('member_photo')
                                        is-invalid
                                    @enderror" value="{{ old('member_photo') }}">
                                    @error('member_photo')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
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
@section('js')
<script>
    $('#mobile_number').on('keypress', function (evt) {
    // var regex = new RegExp("^[a-zA-Z0-9]+$");
    // var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    // if (!regex.test(key)) {
    //    event.preventDefault();
    //    return false;
    // }
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
    });
</script>
@stop