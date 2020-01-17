<div class="lime-body">
    <div class="container">

        <div id="form-errors"></div>
        <div class="row create">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Główne ustawienia serwisu</h5>
                        {!! Form::open(['class'=>'create needs-validation','novalidate','url'=>route('admin.settings.main.create')]) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">

                                <div class=" form-group">
                                    {!! Form::label('site-name','Nazwa serwisu:') !!}
                                    {!! Form::text('site-name',Settings::get('site-name'),['class'=>'form-control','required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('site-description','Opis serwisu:') !!}
                                    {!! Form::textarea('site-description',Settings::get('site-description'),['class'=>'form-control','required']) !!}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-checkbox">

                                    <div class="form-group col-md-6">
                                        {!! Form::label('site-enabled','Strona:') !!}
                                        {!! Form::select('site-enabled',['1'=>"Włączona",'0'=>'Wyłączona'],Settings::get('site-enabled'),['class'=>'form-control custom-select','required']) !!}
                                    </div>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('login-enabled','Logowanie:') !!}
                                        {!! Form::select('login-enabled',['1'=>"Włączone",'0'=>'Wyłączone'],Settings::get('login-enabled'),['class'=>'form-control custom-select','required']) !!}
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('register-enabled','Rejestracja:') !!}
                                        {!! Form::select('register-enabled',['1'=>"Włączona",'0'=>'Wyłączona'],Settings::get('register-enabled'),['class'=>'form-control custom-select','required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::submit('Zapisz',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--

Czy serwis włączony
Czy logowanie włączone
Czy rejestracja włączona
Nazwa serwisu
Opis serwisu

/
/
/
/
/
/
/