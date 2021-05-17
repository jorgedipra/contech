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
                        <li class="active"><a href="?perfil=1&opp=1">Administrar Reporte</a></li>
                        <li><a href="?perfil=1&opp=2">Monitoreo</a></li>
                        <li><a href="?perfil=1&opp=3">Alertas</a></li>
                        <li><a href="?perfil=1&opp=4">Notificaciones <span class="badge">1,118</span></a></li>
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
                        <li class="active"><a href="?perfil=2&opp=1">Creación de Usuarios</a></li>
                        <li><a href="?perfil=2&opp=2">Modificación de Usuarios</a></li>
                        <li><a href="?perfil=2&opp=3">Deshabilitación de Usuarios <span class="badge">1,118</span></a></li>
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
            setTimeout(function(){$("#loading").hide(); }, 1500);
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