@extends('layouts.app')

@section('content')
{{-- <div class="container"  > --}}

    <div class="row justify-content-center">

        <div class="col-6">
        <form style="background-color:#a5aaaa;padding: 10%; margin-top:20%;" method="POST" action="{{route('login')}}">

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" id="btnGroupAddon2"><span class="fa fa-user"></span></div>
                        </div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="MotDePasse">Mot de passe</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" id="btnGroupAddon2"><span class="fa fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="MotDePasse" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-5">
                        <button type="submit" class="btn btn-dark">Se connecter</button>
                    </div>

                    <div class="col">
                        <a href="#" class=" btn-outline-danger">Mot de passe oublié </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
{{-- </div> --}}
@endsection
   