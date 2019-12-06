 <?php

    use yii\helpers\Url;
    /* @var $this yii\web\View */

    $this->title = 'My Yii Application';
    ?>

 <div class="site-index">

     <div class="jumbotron">



         <style>
             .dropdown-submenu {
                 position: relative;
             }

             .dropdown-submenu>.dropdown-menu {
                 top: 0;
                 left: 100%;
                 margin-top: -6px;
                 margin-left: -1px;

             }

             .dropdown-submenu:hover>.dropdown-menu {
                 display: block;
             }

             .dropdown-submenu>a:after {
                 display: block;
                 content: " ";
                 float: right;
                 width: 0;
                 height: 0;
                 border-color: transparent;
                 border-style: solid;
                 border-width: 5px 0 5px 5px;
                 border-left-color: #cccccc;
                 margin-top: 5px;
                 margin-right: -10px;
             }

             .dropdown-submenu:hover>a:after {
                 border-left-color: #ffffff;
             }

             .dropdown-submenu.pull-left {
                 float: none;
             }

             .dropdown-submenu.pull-left>.dropdown-menu {
                 left: -100%;
                 margin-left: 10px;

             }
         </style>

         <div class="container">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                     <span class="sr-only">Toggle navigation</span>

                 </button>
             </div>
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                 <ul class="nav navbar-nav">
                     <li class="menu-item dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background: lightgray;">Usuario Banco Ficohsa<b class="caret"></b></a>
                         <ul class="dropdown-menu">
                             <li class="menu-item dropdown ">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Perfil</a>

                             </li>
                             <li class="menu-item dropdown dropdown-submenu">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mis Tramites</a>
                                 <ul class="dropdown-menu">
                                     <li class="menu-item dropdown dropdown-submenu">
                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Confirmaciones</a>
                                         <ul class="dropdown-menu">
                                             <li>
                                                 <a href="<?= Url::toRoute(['/site/confirmaciones']) ?>">Nueva Confirmación</a>
                                             </li>
                                             <li>
                                                 <a href="<?= Url::toRoute(['/site/consulta-confirmaciones']) ?>">Consultar Confirmación</a>
                                             </li>
                                         </ul>
                                     </li>
                                     <li class="menu-item dropdown dropdown-submenu">
                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Redescuentos</a>
                                         <ul class="dropdown-menu">
                                             <li>
                                                 <a href="#">Nuevo Redescuento</a>
                                             </li>
                                             <li>
                                                 <a href="#">Consultar Redescuento</a>
                                             </li>
                                         </ul>
                                     </li>
                                     <li class="menu-item dropdown dropdown-submenu">
                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Desembolsos</a>
                                         <ul class="dropdown-menu">
                                             <li>
                                                 <a href="#">Nuevo Desembolso</a>
                                             </li>
                                             <li>
                                                 <a href="#">Consultar Desembolso</a>
                                             </li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                             <li class="menu-item dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Salir</a>

                             </li>
                         </ul>
                     </li>
                 </ul>
             </div>
         </div>

     </div>


 </div>