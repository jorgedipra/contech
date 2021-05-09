@extends('layouts.app')

@section('content')
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
@endif

@endsection
