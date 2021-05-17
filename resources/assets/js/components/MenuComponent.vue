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
                        <li id="type_AR" class="dt_menu" ><a href="?perfil=1&opp=1">Administrar Reporte <i class="dt_icono fa fa-clipboard" aria-hidden="true"></i></a></li>
                        <li id="type_Mn" class="dt_menu" ><a href="?perfil=1&opp=2">Monitoreo <i class="dt_icono fa fa-coffee" aria-hidden="true"></i></a></li>
                        <li id="type_Al" class="dt_menu" ><a href="?perfil=1&opp=3">Alertas <i class="dt_icono fa fa-exclamation-triangle" aria-hidden="true"></i></a></li>
                        <li id="type_Nt" class="dt_menu" ><a href="?perfil=1&opp=4">Notificaciones  <i class="dt_icono fa fa-bell" aria-hidden="true"></i><span class="badge">1,118</span></a></li>
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
                        <li  id="type_Cr" class="active"><a href="?perfil=2&opp=1">Creación de Usuarios</a></li>
                        <li  id="type_Mu" class="dt_menu" ><a href="?perfil=2&opp=2">Modificación de Usuarios</a></li>
                        <li  id="type_Du" class="dt_menu" ><a href="?perfil=2&opp=3">Deshabilitación de Usuarios <span class="badge">1,118</span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</article>
</template>
<style scoped>
i.dt_icono {
    float: right;
    font-size: 25px;
}
</style>
<script>
    export default {
        props: {
            data: {},
            opp: {},
        },
        data() {
            return {
                perfil: '',
                option: '',
                nameperfil: ''
            }
        },
        mounted() {
            this.perfil = this.data;
            this.option = this.opp;
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
            $('.dt_menu').removeClass('active');
            $(".dt_icono").hide();
            switch (this.option) {
                case "1":
                        $("#type_AR").addClass("active");
                        $(".fa-clipboard").show();
                    break;
                case "2":
                        $("#type_Mn").addClass("active");
                        $(".fa-coffee").show();
                    break;
                case "3":
                        $("#type_Al").addClass("active");
                        $(".fa-exclamation-triangle").show();
                    break;
                default:
                        $("#type_Nt").addClass("active");
                        $(".fa-bell").show();
                    break;
            }
        },
        methods:{
        },
        computed:{
            
        }
}
</script>