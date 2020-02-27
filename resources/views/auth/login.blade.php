@extends('layouts.app')

@section('content')

    <div class="login-container">

        <div class="row">

            <div class="col-lg-4 col-md-5 col-sm-9 lfh">
                <div class="card login-box">
                    <div class="card-body">
                        <div id="form-errors"></div>
                        <h5 class="card-title">Zaloguj się</h5>
                    <form method="POST" class="login" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Podaj Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Podaj Hasło">
                            </div>
                            <div class="custom-control custom-checkbox form-group">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                <label class="custom-control-label" for="exampleCheck1">Zapamiętaj mnie</label>
                            </div>
                            <a href="#" class="float-left forgot-link">Zapomniałeś hasła?</a>
                        <input type="submit" class="btn btn-primary float-right m-l-xxs" value="Zaloguj się">
                            <a href="{{route('register')}}" class="btn btn-secondary float-right">Zarejestruj</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
