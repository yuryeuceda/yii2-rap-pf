<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$js = <<<SCRIPT
/* To initialize BS3 tooltips set this below */
$(function () { 
    $("[data-toggle='tooltip']").tooltip(); 
});;
/* To initialize BS3 popovers set this below */
$(function () { 
    $("[data-toggle='popover']").popover(); 
});
SCRIPT;
// Register tooltip/popover initialization javascript
$this->registerJs($js);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<!-- 
<meta http-equiv="refresh" content="10; url="<?php echo $_SERVER['PHP_SELF']; ?>">
 -->

<body>
    <?php $this->beginBody() ?>
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
    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-default  navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Inicio', 'url' => ['/site/index']],
                /* ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']], 
                ['label' => 'Confirmaciones', 'url' => ['/site/confirmaciones']],*/
                ['label' => 'Confirmacion Acceso Financiero', 'url' => ['/site/confirmacion-acceso-financiamiento']],
                /*  ['label' => 'Consulta de Confirmaciones', 'url' => ['/site/consulta-confirmaciones']],*/
                ['label' => 'mensajeria de Confirmaciones', 'url' => ['/site/mensajeria-confirmaciones']],
                ['label' => 'ingreso mensajes', 'url' => ['/site/ingreso-mensajes']],
                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]) : ('<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>')
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container" style="width: 100%">
            <div class="row">
                <div class="col-md-8"> </div>
                <div class="col-md-4">

                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="menu-item dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background: lightgray;">Usuario banco Davivienda<b class="caret"></b></a>
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
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>