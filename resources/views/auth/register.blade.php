@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="clips">
                                        <div class="row text-white">
                                            <div class="text-center">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <input id="name" type="text" placeholder="Insert Name"
                                                                   class="form-control @error('name') is-invalid @enderror"
                                                                   name="name" value="{{ old('name') }}" required
                                                                   autocomplete="name" autofocus>

                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <input id="email" type="email" placeholder="Insert Email"
                                                                   class="form-control @error('email') is-invalid @enderror"
                                                                   name="email" value="{{ old('email') }}" required
                                                                   autocomplete="email">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <input id="password" type="password" placeholder="Insert Password"
                                                                   class="form-control @error('password') is-invalid @enderror"
                                                                   name="password" required autocomplete="new-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <input id="password-confirm" type="password" placeholder="Again Password"
                                                                   class="form-control" name="password_confirmation"
                                                                   required autocomplete="new-password">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <div class="col-lg-12">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Register') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
