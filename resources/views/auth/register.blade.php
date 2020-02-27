@extends('layouts.app')

@section('content')
    <div class="login-container">

        <div class="row">

            <div class="col-lg-4 col-md-5 col-sm-9 lfh">
                <div class="card login-box">
                    <div class="card-body">
                        <div id="form-errors"></div>
                        <h5 class="card-title">Zaloguj się</h5>
                        <form method="POST" class="register" action="{{ route('register') }}">
                            @csrf

                                <div class="form-group">
                                    <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Podaj Login">
                                </div>
                            <div class="form-group">
                                <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Podaj Email">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Podaj Hasło">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" required class="form-control" id="password_confirmation" placeholder="Powtórz Hasło">
                            </div>
                            <input type="submit" class="btn btn-primary float-right m-l-xxs" value="Zarejestruj się">
                            <a href="{{route('login')}}" class="btn btn-secondary float-right">Zaloguj się</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
