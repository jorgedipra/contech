<template>
<article id="menu">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ nameperfil }}</li>
    </ol>
    </nav>
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
        props: {
            data: {},
        },
        data() {
            return {
                perfil: '',
                nameperfil: ''
            }
        },
        mounted() {
            this.perfil = this.data;
            // console.log(this.perfil);
            $("#sub_menu1").hide();
            $("#sub_menu2").hide();

            switch (this.perfil) {
                case "1":
                    $("#menu").show();
                    $("#sub_menu1").show();
                    this.nameperfil="Coordinación";
                    break;
                case "2":
                    $("#menu").show();
                    $("#sub_menu2").show();
                    this.nameperfil="Personal";
                    break;
            
                default:
                    $("#sub_menu1").hide();
                    $("#sub_menu2").hide();
                    break;
            }
        },
        methods:{
        },
        computed:{
            
        }
}
</script>