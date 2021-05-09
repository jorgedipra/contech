<template>
<article id="menu">
    <div id="sub_menu1" class="col-sm-3">
        <div class="sidebar-nav">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">Sidebar Menú</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Administrar Reporte</a></li>
                        <li><a href="#">Monitoreo</a></li>
                        <li><a href="#">Alertas</a></li>
                        <li><a href="#">Notificaciones <span class="badge">1,118</span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div id="sub_menu2" class="col-sm-3">
        <div class="sidebar-nav">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">Sidebar Menú</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Creación de Usuarios</a></li>
                        <li><a href="#">Modificación de Usuarios</a></li>
                        <li><a href="#">Deshabilitación de Usuarios <span class="badge">1,118</span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</article>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>