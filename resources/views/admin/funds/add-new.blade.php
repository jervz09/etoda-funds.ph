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
                        {{-- @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif --}}
                        @if(session()->has('message'))
                            <p class="alert alert-success">{!! session()->get('message') !!}</p>
                        @endif
                    </div>
                    <div class="card-body ">
                        <form action="add-funds" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <div class="form-row">
                                <label for="current" class="col-3">Current Amount</label>
                                <div class="col-9">
                                    <input type="text" name="current" id="current" class="form-control @error('current')
                                        is-invalid
                                    @enderror" value="{{ old('current') }}">
                                    @error('current')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="source" class="col-3">Source Funds</label>
                                <div class="col-9">
                                    <input type="text" name="source" id="source" class="form-control @error('source')
                                        is-invalid
                                    @enderror" value="{{ old('source') }}">
                                    @error('source')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="amount" class="col-3">Amount</label>
                                <div class="col-9">
                                    <input type="text" name="amount" id="amount" class="form-control @error('amount')
                                        is-invalid
                                    @enderror" value="{{ old('amount') }}">
                                    @error('amount')
                                        <div class="alert alert-danger text-sm">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
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
    $('#amount').on('keypress', function (evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
    });


    $('#current_amount').on('keypress', function (evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
    });
</script>
@stop