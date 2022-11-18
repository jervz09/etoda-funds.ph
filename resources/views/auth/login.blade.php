{{-- @extends('adminlte::auth.login') --}}

@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@php( $login_url = view()->getSection('login_url') ?? config('adminlte.login_url', 'login') )
{{-- @php( $register_url = view()->getSection('register_url') ?? config('adminlte.register_url', 'register') ) --}}
@php( $password_reset_url = view()->getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    {{-- @php( $register_url = $register_url ? route($register_url) : '' ) --}}
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    {{-- @php( $register_url = $register_url ? url($register_url) : '' ) --}}
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif
@section('style')
<style>
    alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }
</style>
@stop
@section('auth_header', __('adminlte::adminlte.login_message'))

@section('auth_body')
    <form action="{{ $login_url }}" method="post">

        @if( session()->get('errors') )

        <ul class="error" style="padding: 0;width: 100%;">
            @foreach( session()->get('errors') as $message )
                @if(is_array($message))
                    @foreach( $message as $subMessage )
                        <div class="alert alert-danger" role="alert" style="margin: 0;width: 100%;">
                            {{ $subMessage }}
                        </div>
                    @endforeach
                @else

                    <div class="alert alert-danger" role="alert" style="margin: 0;width: 100%;">
                        {{ $message }}
                    </div>
                @endif
            @endforeach
        </ul>

        @endif

        @csrf
        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="username" name="username" class="form-control"
                   value="{{ old('username') }}" placeholder="Username" autofocus required>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password" id="inp_password" class="form-control"
                   placeholder="{{ __('adminlte::adminlte.password') }}" required>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password">
                </div>
            </div>
        </div>

        {{-- Login field --}}
        <div class="row">
            <div class="col-7">
                <div class="icheck-primary" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        {{ __('adminlte::adminlte.remember_me') }}
                    </label>
                </div>
            </div>

            <div class="col-5">
                <button type=submit class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                    <span class="fas fa-sign-in-alt"></span>
                    {{ __('adminlte::adminlte.sign_in') }}
                </button>
            </div>
        </div>

    </form>
@stop
@section('js')
<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#inp_password");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
@stop