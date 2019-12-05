<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'INGRESO DE MENSAJES';

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
                <b>Detalle de Mensajes Intercambiados por Confirmación</b>
            </div>
            <div class="panel-body" style="padding: 2px 6px;">
                <div class="card-heading">
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
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Número de Mensaje:</th>
                                    <th>00000013</th>

                                </tr>
                                <tr>
                                    <th>Usuario:</th>
                                    <th>Yury</th>

                                </tr>
                                <tr>
                                    <th>Fecha Consulta:</th>
                                    <th>05/10/2019 13:10:45</th>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-body">
                    <?= $form->field($model, 'mensajeDescripcion')->textarea(['rows' => '6'])->label('Detalle del Mensaje:') ?>
                </div>


            </div>
            <div class="panel-footer text-right" style="padding: 4px 15px;">
                <div class="form-group" style="margin:auto;">
                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary', 'name' => 'btnEnviarConfirmacion']) ?>
                    <?= Html::submitButton('Cancelar', ['class' => 'btn btn-warning', 'name' => 'btnEnviarConfirmacion']) ?>
                </div>
            </div>

        </div>

    </div>
</div>