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

                        @foreach ($user as $user)
                            @php
                                $username = $user->username;
                                $password = $user->password;
                            @endphp
                            @break
                        @endforeach
                        @foreach ($member as $member)
                            @php
                                $first_name = $member->first_name;
                                $last_name = $member->last_name;
                                $mobile_number = $member->mobile_number;
                                $address = $member->address;
                                $format_birthdate = date('Y-m-d',strtotime($member->birthdate));
                                $plate_number = $member->plate_number;
                                $member_photo = $member->photo_url;
                                if ($member_photo == "/"){
                                    $member_photo = 'uploads/member_photos/etoda-default-image.png';
                                }

                            @endphp
                        @endforeach
                        <form action="update_profile_setting" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="profile-pic">
                                <label class="-label" for="file">
                                  <span class="glyphicon glyphicon-camera"></span>
                                  <span>Change Image</span>
                                </label>
                                <input name="member_photo" id="file" type="file" onchange="loadFile(event)"/>
                                <img src="/{{ $member_photo }}" id="output" width="200" />
                            </div>
                            <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}">
                            <div class="form-row">
                                <label for="username" class="col-3">Username</label>
                                <div class="col-9">
                                    <input type="text" name="username" id="username" class="form-control @error('username')
                                        is-invalid
                                    @enderror" value="{{$username}}">
                                    @error('username')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
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
                                        @enderror" value="{{$mobile_number}}">
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
                                    @enderror" value="{{$address}}">
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
                                    @enderror" value="{{ $format_birthdate }}">
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
                                    @enderror" value="{{ $plate_number }}">
                                    @error('plate_number')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-row mt-2">
                                <label for="member_photo" class="col-3">Member's Photo</label>
                                <div class="col-3">
                                    <input type="file" name="member_photo" id="member_photo" class="form-control @error('member_photo')
                                        is-invalid
                                    @enderror" value="{{$member->member_photo}}">
                                    @error('member_photo')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                            </div> --}}
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