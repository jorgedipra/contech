@extends('layouts.app')

@section('content')
<div id="loading">
    <div class="lds-ripple"><div></div><div></div></div>
</div>
@if($perfil==0)
<div class="container">
    <div class="row">
        <h2 class="col-md-8 col-md-offset-2 text-center">Seleciones Perfil</h2>
        <br><br>
        <br><br>
        <br><br>
    </div>
    <div class="row">
        <a href="/home?perfil=1" class="col-md-3 col-md-offset-2 tarjeta">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Coordinación</div>
                <div class="panel-body text-center">
                    <img src="./img/perfiles/Coordinacion.svg"  width="150" />
                </div>
            </div>
        </a>
        <div class="col-md-2 col-md-offset-2">
        </div>
        <a href="/home?perfil=2" class="col-md-3 col-md-offset-2 tarjeta">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Personal</div>
                <div class="panel-body text-center">
                    <img src="./img/perfiles/personal.svg"  width="150" />
                </div>
            </div>
        </a>
    </div>
</div>
@elseif ($perfil==1)

<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
        @if ($opp == 1)
            <h2 class="card-header text-center">
                Memoria de Datos
            </h2>
            <div class="card-body text-center">
                    <select class="form-select form-select-lg mb-3 btn-lg" aria-label="Disabled select example">
                    <option selected>Filtar Estado</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                    <br><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>  
                    
            </div>
            <div class="card-footer text-muted text-center">
                <a href="#" class="btn btn-primary btn-lg">Abrir</a>
                &nbsp;&nbsp;&nbsp;
                <a href="#" class="btn btn-success btn-lg">Descargar</a>
            </div>
        @elseif ($opp == 2)
            <h2 class="card-header text-center">
                Reporte Actual
            </h2>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Codigo:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="|">
                    </div>
                    <br><br>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <br><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5">|</textarea>
                </div><br><br>
                
                    
            </div>
            <div class="card-footer text-muted text-center">
                <a href="#" class="btn btn-primary btn-lg">Corregido</a>
                &nbsp;&nbsp;&nbsp;
                <a href="#" class="btn btn-success btn-lg">Escalar</a>
            </div>
        @elseif ($opp == 3)
            <h2 class="card-header text-center">
                <div class="btn-group " role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-light btn-lg"> &nbsp;&nbsp; Crear &nbsp;&nbsp; </button>
                    <button type="button" class="btn btn-light btn-lg"> &nbsp;&nbsp; Consultar &nbsp;&nbsp; </button>
                    <button type="button" class="btn btn-light btn-lg"> &nbsp;&nbsp; Eliminar &nbsp;&nbsp; </button>
                    <button type="button" class="btn btn-light btn-lg"> &nbsp;&nbsp; Enviar &nbsp;&nbsp; </button>
                </div>
            </h2>
            <div class="card-body text-center">
                     <select class="form-select form-select-lg mb-3 btn-lg" aria-label="Disabled select example">
                    <option selected>Elija Tipo de mensaje</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                     &nbsp;&nbsp;&nbsp;
                    <select class="form-select form-select-lg mb-3 btn-lg" aria-label="Disabled select example">
                    <option selected>Destinatario</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>   
                    <br><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8">|</textarea>
                    <button type="button" class="btn btn-light" style="margin-left: 25%; margin-top: -100px;position: absolute;z-index: 99;font-size: 20px;">
                    +&nbsp;&nbsp;Añadir <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;o Crear
                    </button> <br><br>     
            </div>
             <div class="card-footer text-muted text-center">
                <a href="#" class="btn btn-primary btn-lg">Cancelar</a>
                &nbsp;&nbsp;&nbsp;
                <a href="#" class="btn btn-success btn-lg">Aceptar</a>
            </div>
        @else
            <h2 class="card-header text-center">
                <div class="btn-group " role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-light btn-lg"> &nbsp;&nbsp; Crear &nbsp;&nbsp; </button>
                    <button type="button" class="btn btn-light btn-lg"> &nbsp;&nbsp; Consultar &nbsp;&nbsp; </button>
                    <button type="button" class="btn btn-light btn-lg"> &nbsp;&nbsp; Eliminar &nbsp;&nbsp; </button>
                    <button type="button" class="btn btn-light btn-lg"> &nbsp;&nbsp; Enviar &nbsp;&nbsp; </button>
                </div><br>
            </h2>
            <div class="card-body text-center">
                     <select class="form-select form-select-lg mb-3 btn-lg" aria-label="Disabled select example">
                    <option selected>Elija Tipo de mensaje</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                     &nbsp;&nbsp;&nbsp;
                    <select class="form-select form-select-lg mb-3 btn-lg" aria-label="Disabled select example">
                    <option selected>Destinatario</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>   
                    <br><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8">|</textarea>
                     <br><br>     
            </div>
             <div class="card-footer text-muted text-center">
                <a href="#" class="btn btn-primary btn-lg">Cancelar</a>
                &nbsp;&nbsp;&nbsp;
                <a href="#" class="btn btn-success btn-lg">Aceptar</a>
            </div>
        @endif
        </div>
    </div>
</div>

@else

<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
        @if ($opp == 1)
            <h2 class="card-header text-center">
                    Featured
                    </h2>
                    <div class="card-body text-center">
                        <h5 class="card-title">Special title treatment</h5>
                        This is some text within a card body.
                    
                    </div>
                    <div class="card-footer text-muted text-center">
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
        @elseif ($opp == 2)
            <h2 class="card-header text-center">
                Memoria de Datos
            </h2>
            <div class="card-body text-center">
                <h5 class="card-title">Special title treatment</h5>
                    This is some text within a card body.
                    
            </div>
            <div class="card-footer text-muted text-center">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        @else

        @endif
        </div>
    </div>
</div>
@endif


@endsection
