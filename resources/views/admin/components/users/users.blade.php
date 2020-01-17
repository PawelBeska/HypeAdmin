<div class="lime-body">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card stat-card">
                    <div class="card-body">
                        <h5 class="card-title">Wszyscy zarejestrowani</h5>
                        <h2 class="float-right">4000</h2>
                        <p>użytkownicy</p>

                        <!-- ZAREJESTROWANI / CEL ZAREJESTROWANYCH-->
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"
                                 aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card stat-card">
                    <div class="card-body">
                        <h5 class="card-title">Wszyscy zalogowani</h5>
                        <h2 class="float-right">143</h2>
                        <p>użytkownicy</p>
                        <!-- ZALOGOWANI / ZAREJESTROWANI -->
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card stat-card">
                    <div class="card-body">
                        <h5 class="card-title">Goście</h5>
                        <h2 class="float-right">200</h2>
                        <p>W ciągu 30 minut</p>
                        <!-- GOŚCIE / CEL GOŚCIE-->
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%"
                                 aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="form-errors"></div>
        <div class="row create">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Nowy użytkownik</h5>
                        <p>Za pomocą tego formularza można tworzyć nowych użytkowników.</p>
                        {!! Form::open(['class'=>'create needs-validation','novalidate','url'=>route('admin.users.create')]) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name','Login:') !!}
                                {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Wpisz login']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::label('email','Email:') !!}
                                {!! Form::email('email',null,['class'=>'form-control','required','placeholder'=>'Wpisz email']) !!}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                {!! Form::label('password','Hasło:') !!}
                                {!! Form::password('password',['class'=>'form-control','placeholder'=>'Wpisz hasło','required']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('password_confirmation','Powtórz hasło:') !!}
                                {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Wpisz powtórzenie hasła','required']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('group','Grupa:') !!}
                                {!! Form::select('group',\App\Group::pluck('name','id'),null,['class'=>'form-control custom-select','required']) !!}
                            </div>

                        </div>
                        {!! Form::submit('Stwórz',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row update hidden">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Szybka edycja</h5>
                        <p>Za pomocą tego formularza można edytować istniejących już użytkowników.</p>
                        {!! Form::open(['class'=>'update needs-validation','novalidate']) !!}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    {!! Form::label('name','Login:') !!}
                                    {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Wpisz login']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('email','Email:') !!}
                                    {!! Form::email('email',null,['class'=>'form-control','required','placeholder'=>'Wpisz email']) !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    {!! Form::label('password','Hasło:') !!}
                                    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Wpisz hasło']) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    {!! Form::label('password_confirmation','Powtórz hasło:') !!}
                                    {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Wpisz powtórzenie hasła']) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    {!! Form::label('group','Grupa:') !!}
                                    {!! Form::select('group',\App\Group::pluck('name','id'),null,['class'=>'form-control custom-select','required']) !!}
                                </div>

                            </div>
                        {!! Form::submit('Edytuj',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Użytkownicy</h5>
                        <p>Tabela wyświetla wszystkich użytkowników zarejestrowanych w serwisie</p>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Login</th>
                                <th scope="col">Email</th>
                                <th scope="col">Grupa</th>
                                <th scope="col">Zarządzanie</th>
                            </tr>
                            </thead>
                        </table>
                        <script>
                         window.datatable =   $('.table').DataTable({
                                columns: [
                                    {data: 'name', "sClass": 'name'},
                                    {data: 'email', "sClass": 'email'},
                                    {data: 'group.name', "sClass": 'group'},
                                    {
                                        name: "buttons",
                                        "targets": -1,
                                        "data": null,
                                        "defaultContent": `<div class="btn-group btn-group" role="group" aria-label="Basic example">

                                       <button type="button" class="btn btn-secondary view"><i class="far fa-eye"></i></button>
                                       <button type="button" class="btn btn-primary update"><i class="far fa-edit"></i></button>
                                       <button type="button" class="btn btn-danger remove"><i class="far fa-minus-square"></i></button>
                                    </div>`
                                    }
                                ],
                                "autoWidth": true,
                                'responsive': true,
                                "processing": true,
                                "serverSide": true,
                                oLanguage: {
                                    sProcessing: `<div class="lime-body">    <div class="container">        <div class="row" style="  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);">            <div class="col-md-8">                <div class="spinner-border" style="color: #747985" le="status">                    <span class="sr-only">Loading...</span>                </div>            </div>        </div>    </div></div>`
                                },
                                rowId: 'id',
                                ajax: {
                                    "url": "{{Route('admin.users.store')}}",
                                    "type": "POST"
                                }
                            });

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>