@extends('layouts.app')

@section('content')
<div class="container">

    <div class=" row justify-content-center align-items-center " style="height: 100vh;">

        <div class="col-md-6">
            <div class="card " style="background-color:#ede7f6">
                <div class="card-header " style="text-align:center:font-size:20px;">Reestablece tu clave</div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" >Email:</label>

                            <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"  class="col-md-4 col-form-label text-md-right">Password:</label>

                            <div class="col-md-6">

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"  class="col-md-4 col-form-label text-md-right">Confirmar Password:</label>

                            <div class="col-md-6">

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4"> 
                                <button type="submit" class="btn btn-primary btn-block ">
                                    Reestablecer password
                                </button>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
