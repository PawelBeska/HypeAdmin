<div class="lime-body">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card stat-card">
                    <div class="card-body">
                        <h5 class="card-title">Ilość grup</h5>
                        <h2 class="float-right">4</h2>
                        <p>w serwisie</p>

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
                        <h5 class="card-title">Ilość administratorów</h5>
                        <h2 class="float-right">143</h2>
                        <p>w serwisie</p>
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
                        <h5 class="card-title">Ilość moderatorów</h5>
                        <h2 class="float-right">200</h2>
                        <p>w serwisie</p>
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

                        <h5 class="card-title">Nowa permisja</h5>
                        <p>Za pomocą tego formularza można stworzyć nową permisję.</p>
                        {!! Form::open(['class'=>'create needs-validation','novalidate','url'=>route('admin.permissions.create')]) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name','Nazwa permisji:') !!}
                                {!! Form::text('name',null,['class'=>'form-control','required']) !!}
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
                        <p>Za pomocą tego formularza można edytować istniejące już permisje.</p>
                        {!! Form::open(['class'=>'update needs-validation','novalidate']) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name','Permisja:') !!}
                                {!! Form::select('name',\App\Permission::pluck('name','id'),null,['class'=>'form-control custom-select','required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::label('group[]','Grupa:') !!}
                                {!! Form::select('group[]',\App\Group::pluck('name','id'),null,['class'=>'form-control custom-select','required','multiple']) !!}
                            </div>
                        </div>
                        {!! Form::submit('Edytuj',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista permisji</h5>
                        <p>Tabela wyświetla wszystkie permisje w serwisie</p>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Nazwa</th>
                                <th scope="col">Grupy</th>
                                <th scope="col">Zarządzanie</th>
                            </tr>
                            </thead>
                        </table>
                        <script>
                            window.datatable = $('.table').DataTable({
                                columns: [
                                    {data: 'name', "sClass": 'name'},
                                    {data: 'group.[].name', "sClass": 'group'},
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
                                    "url": "{{Route('admin.permissions.store')}}",
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