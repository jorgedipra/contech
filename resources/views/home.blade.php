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
            <div class="card-header text-center">
                    Featured
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Special title treatment</h5>
                        This is some text within a card body.
                    
                    </div>
                    <div class="card-footer text-muted text-center">
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
        @elseif ($opp == 2)
            `Password` input is empty!
        @else

        @endif
        </div>
    </div>
</div>

@else

<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
        @if ($opp == 1)
            <div class="card-header text-center">
                    Featured
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Special title treatment</h5>
                        This is some text within a card body.
                    
                    </div>
                    <div class="card-footer text-muted text-center">
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
        @elseif ($opp == 2)
            `Password` input is empty!
        @else

        @endif
        </div>
    </div>
</div>
@endif


@endsection
