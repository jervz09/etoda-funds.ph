@extends('adminlte::page')
@section('title', 'Profile Settings')
@section('content_header')
    <h1 class="text-bold">
        Profile Settings
    </h1>
@stop

@section('content')
    <div class="container-fluid px-2 py-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if(session()->has('message'))
                            <p class="alert alert-success">{!! session()->get('message') !!}</p>
                        @endif
                    </div>
                    <div class="card-body ">

                        <form action="update_profile_setting" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row mt-2">
                                <label for="first_name" class="col-3">First Name</label>
                                <div class="col-3">
                                    <input type="text" name="first_name" id="first_name" class="form-control @error('first_name')
                                        is-invalid
                                    @enderror" value="{{$first_name}}">
                                    @error('first_name')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-1"></div>
                                <label for="last_name" class="col-2">Last Name</label>
                                <div class="col-3">
                                    <input type="text" name="last_name" id="last_name" class="form-control @error('last_name')
                                        is-invalid
                                    @enderror" value="{{ $last_name }}">
                                    @error('last_name')
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

    var loadFile = function (event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
@stop