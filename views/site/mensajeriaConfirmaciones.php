<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

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
        <h4 class="text-center"><B><?= Html::encode($this->title) ?></B></h4>
        <img src="" alt="">
    </header>



    <div class="row">


        <div class=" panel panel-primary" style="margin-bottom: 10px;">

            <div class="panel-heading">
                Detalle de Mensajes Intercambiados por Confirmacion

            </div>
            <div class="panel-body" style="padding: 2px 6px;">
                <div class="container">
                    <div class="col-md-5">
                        <table class="table">
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
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
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
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="panel-footer text-center" style="padding: 4px 15px;">
                <div class="form-group" style="margin:auto;">
                    <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary', 'name' => 'btnEnviarConfirmacion']) ?>
                </div>
            </div>

        </div>

    </div>
</div>