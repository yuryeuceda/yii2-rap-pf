<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = ' DETALLE DE MENSAJES INTERCAMBIADOS POR CONFIRMACIÓN';

$form = ActiveForm::begin([
    'layout' => 'horizontal',
    'fieldConfig' => [

        'horizontalCssClasses' => [
            'label' => 'col-sm-10',
            'offset' => 'col-sm-offset-4',
            'wrapper' => 'col-sm-12',
            'error' => '',
            'hint' => '',
        ],
    ],
]);


?>

<div class="container">
    <header style="margin:auto;">
        <div class="row">
            <h4 class="text-center"><B><?= Html::encode($this->title) ?></B></h4>
        </div>
        <div class="row">
            <div class="col-md-8"> </div>
            <div class="col-md-4" style="padding-bottom: 4px;">
                <div class="col-md-3"></div>
                <a href="<?= Url::toRoute(['/site/consulta-confirmaciones']) ?>"><img src=" ../web/img/RAP_CONFIRM.png" class="img-thumbnail" alt="" style="width: 60px;"></a>
                <a href="#"><img src="../web/img/RAP_PDF.png" class="img-thumbnail" alt="" style="width: 54px;"></a>
                <a href="<?= Url::toRoute(['/site/ingreso-mensajes']) ?>"><img src="../web/img/RAP_MENSAJES.png" class="img-thumbnail" alt="" style="width: 61px;"></a>
                <a href="#"><img src="../web/img/RAP_ACTUALIZAR.png" class="img-thumbnail" alt="" style="width: 61px;"></a>
            </div>
        </div>
    </header>

    <div class="row">


        <div class=" panel panel-primary" style="margin-bottom: 10px; ">

            <div class="panel-heading" style="background-color:#fd642b; color:white">
                <b>Detalle de Mensajes Intercambiados por Confirmación</b>
            </div>
            <div class="panel-body" style="padding: 2px 6px;">
                <div class="container">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Número de Confirmación:</th>
                                    <th>CFR00013</th>

                                </tr>
                                <tr>
                                    <th>Tipo de Financiamiento:</th>
                                    <th>BONO CONVIVIENDA</th>

                                </tr>
                                <tr>
                                    <th>Estatus:</th>
                                    <th>EN ANÁLISIS</th>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead style="background-color:#337ab7; color: white;">
                            <tr>
                                <th scope="col">Número de Mensaje</th>
                                <th scope="col">Consulta Realizada</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha Consulta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>


        </div>

    </div>

</div>